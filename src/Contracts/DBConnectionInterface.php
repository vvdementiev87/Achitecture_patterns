<?php

namespace Devavi\Architecture\Contracts;

interface DBConnectionInterface
{
    public function connectionStatus();

    public function closeConnection();
}
