<?php

use Devavi\Architecture\DB\MySQL;
use Devavi\Architecture\DB\Oracle;
use Devavi\Architecture\DB\PostgreSQL;
use Devavi\Architecture\Factories\MySQLORMFactory;
use Devavi\Architecture\Factories\OracleORMFactory;
use Devavi\Architecture\Factories\PostgreORMFactory;
use Devavi\Architecture\Services\ORMService;

function load($className)
{
    var_dump($className);
    $file = $className . ".php";
    $nameSpace = "Devavi\Architecture";
    $file = str_replace($nameSpace, "src", $file);
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        var_dump($file);
        include $file;
    }
};


$postgreFactory = new PostgreORMFactory(new PostgreSQL());
$postgreORM = new ORMService($postgreFactory);
$postgreORM->connectionInfo();
$postgreORM->getAll();
$postgreORM->insert();

$oracleFactory = new OracleORMFactory(new Oracle());
$oracleORM = new ORMService($oracleFactory);
$oracleORM->connectionInfo();
$oracleORM->getAll();
$oracleORM->insert();

$mySQLFactory = new MySQLORMFactory(new MySQL());
$mySQLORM = new ORMService($mySQLFactory);
$mySQLORM->connectionInfo();
$mySQLORM->getAll();
$mySQLORM->insert();
