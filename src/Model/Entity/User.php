<?php

declare(strict_types=1);

namespace Model\Entity;

use Interfaces\DomainObjectInterface;

class User implements DomainObjectInterface
{
    private $id;
    private $name;
    private $login;
    private $passwordHash;
    private $role;

    public function __construct(int $id, string $name, string $login, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->login = $login;
        $this->passwordHash = $password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    public function getRole(): Role
    {
        return $this->role;
    }
}
