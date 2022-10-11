<?php


namespace Devavi\Architecture\Factories;


use Devavi\Architecture\Contracts\DBConnectionInterface;
use Devavi\Architecture\Contracts\DBQueryBuilderInterface;
use Devavi\Architecture\Contracts\DBRecordInterface;
use Devavi\Architecture\Contracts\ORMFactoryInterface;
use Devavi\Architecture\DB\PostgreSQL;
use Devavi\Architecture\ORM\PostgreDBConnection;
use Devavi\Architecture\ORM\PostgreDBQueryBuilder;
use Devavi\Architecture\ORM\PostgreDBRecord;

class PostgreORMFactory implements ORMFactoryInterface
{
    private PostgreSQL $postgreConnection;

    public function __construct(PostgreSQL $postgreConnection)
    {
        $this->postgreConnection = $postgreConnection;
    }

    public function createDBConnection(): DBConnectionInterface
    {
        return new PostgreDBConnection($this->postgreConnection);
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new PostgreDBRecord($this->postgreConnection);
    }

    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new PostgreDBQueryBuilder($this->postgreConnection);
    }
}
