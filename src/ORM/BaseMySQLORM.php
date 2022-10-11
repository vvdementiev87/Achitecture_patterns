<?php


namespace Devavi\Architecture\ORM;


use Devavi\Architecture\DB\MySQL;

abstract class BaseMySQLORM
{
    private MySQL $mySQLConnection;

    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    public function getMySQLConnection(): MySQL
    {
        return $this->mySQLConnection;
    }
}
