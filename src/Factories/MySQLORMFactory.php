<?php


namespace Devavi\Architecture\Factories;


use Devavi\Architecture\Contracts\DBConnectionInterface;
use Devavi\Architecture\Contracts\DBQueryBuilderInterface;
use Devavi\Architecture\Contracts\DBRecordInterface;
use Devavi\Architecture\Contracts\ORMFactoryInterface;
use Devavi\Architecture\Db\MySQL;
use Devavi\Architecture\ORM\MySQLDbConnection;
use Devavi\Architecture\ORM\MySQLDbQueryBuilder;
use Devavi\Architecture\ORM\MySQLDbRecord;

class MySQLORMFactory implements ORMFactoryInterface
{
    private MySQL $mySQLConnection;

    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }

    public function createDBConnection(): DBConnectionInterface
    {
        return new MySQLDBConnection($this->mySQLConnection);
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new MySqlDbRecord($this->mySQLConnection);
    }

    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new MySQLDbQueryBuilder($this->mySQLConnection);
    }
}
