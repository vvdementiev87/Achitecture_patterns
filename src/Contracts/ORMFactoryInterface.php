<?php

namespace Devavi\Architecture\Contracts;

interface ORMFactoryInterface
{
    public function createDBConnection(): DBConnectionInterface;

    public function createDBRecord(): DBRecordInterface;

    public function createDBQueryBuilder(): DBQueryBuilderInterface;
}
