<?php


namespace EntityManager;


use Interfaces\EntityMapperInterface;
use IdentityMap\IdentityMap;
use Mapper\UserMapper;

class EntityManager
{
    private IdentityMap $identityMap;
    private EntityMapperInterface $mapper;

    public function __construct(IdentityMap $identityMap, EntityMapperInterface $mapper)
    {
        $this->identityMap = $identityMap;
        $this->mapper = $mapper;
    }

    public function findById(string $class, int $id)
    {
        $entity = $this->identityMap->find($class, $id);
        if ($entity) {
            return $entity;
        }

        $entity = $this->mapper->findById($id);
        if ($entity === null) {
            return null;
        }

        $this->identityMap->add($entity);

        return $entity;
    }
}
