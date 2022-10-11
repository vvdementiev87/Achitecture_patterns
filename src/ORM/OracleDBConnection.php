<?php

namespace Devavi\Architecture\ORM;

use Devavi\Architecture\Contracts\DBConnectionInterface;

class OracleDBConnection extends BaseOracleORM implements DBConnectionInterface
{

    public function connectionStatus()
    {
        echo 'Этот сервис работает с Oracle' . PHP_EOL;
    }

    public function closeConnection()
    {
        // TODO: Implement closeConnection() method.
    }
}
