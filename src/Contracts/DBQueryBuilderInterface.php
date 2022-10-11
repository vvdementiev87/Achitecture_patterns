<?php

namespace Devavi\Architecture\Contracts;

interface DBQueryBuilderInterface
{
    public function getAll();

    public function getAllWhere();

    public function getAllWhereIn();
}
