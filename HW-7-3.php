<?php

use EntityManager\EntityManager;
use IdentityMap\IdentityMap;
use Mapper\UserMapper;
use Model\Repository\User;

spl_autoload_register('load');

function load($className)
{
    $file = $className . ".php";
    $file = "src\\" . $file;
    echo $file;
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        include $file;
    }
};

$entityManager = new EntityManager(new IdentityMap(), new UserMapper(new User()));

$user1 = $entityManager->findById(\App\Model\Entity\User::class, 1);
echo "Под id 1 хранится пользователь {$user1->getName()}" . PHP_EOL;

$user2 = $entityManager->findById(\App\Model\Entity\User::class, 2);
echo "Под id 2 хранится пользователь {$user2->getName()}" . PHP_EOL;
