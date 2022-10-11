<?php

namespace Devavi\Architecture\ORM;

use Devavi\Architecture\DB\Oracle;

abstract class BaseOracleORM
{
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function getOracleConnection(): Oracle
    {
        return $this->oracleConnection;
    }
}
