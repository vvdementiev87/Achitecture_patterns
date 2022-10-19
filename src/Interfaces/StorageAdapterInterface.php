<?php

namespace Interfaces;

interface StorageAdapterInterface
{
    public function find(int $id): ?array;
}
