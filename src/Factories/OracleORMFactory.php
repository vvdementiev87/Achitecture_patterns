<?php


namespace Devavi\Architecture\Factories;


use Devavi\Architecture\Contracts\DBConnectionInterface;
use Devavi\Architecture\Contracts\DBQueryBuilderInterface;
use Devavi\Architecture\Contracts\DBRecordInterface;
use Devavi\Architecture\Contracts\ORMFactoryInterface;
use Devavi\Architecture\DB\Oracle;
use Devavi\Architecture\ORM\OracleDBConnection;
use Devavi\Architecture\ORM\OracleDBQueryBuilder;
use Devavi\Architecture\ORM\OracleDBRecord;

class OracleORMFactory implements ORMFactoryInterface
{
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function createDBConnection(): DBConnectionInterface
    {
        return new OracleDBConnection($this->oracleConnection);
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new OracleDBRecord($this->oracleConnection);
    }

    public function createDBQueryBuilder(): DBQueryBuilderInterface
    {
        return new OracleDBQueryBuilder($this->oracleConnection);
    }
}
