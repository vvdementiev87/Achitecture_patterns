<?php


namespace Mapper;


use Interfaces\StorageAdapterInterface;
use Model\Entity\User;
use Interfaces\EntityMapperInterface;

class UserMapper implements EntityMapperInterface
{
    private $storageAdapter;

    public function __construct(StorageAdapterInterface $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function findById(int $id): ?User
    {
        $result = $this->storageAdapter->find($id);
        if ($result === null) {
            return null;
        }
        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User
    {
        return new User($row['id'], $row['name'], $row['login'], $row['password']);
    }
}
