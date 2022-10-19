<?php


namespace IdentityMap;


use Interfaces\DomainObjectInterface;

class IdentityMap
{
    private $identityMap = [];

    public function add(DomainObjectInterface $object)
    {
        $key = $this->getGlobalKey(get_class($object), $object->getId());
        $this->identityMap[$key] = $object;
    }

    public function find(string $classname, int $id)
    {
        $key = $this->getGlobalKey($classname, $id);
        if (isset($this->identityMap[$key])) {
            return $this->identityMap[$key];
        }
        return null;
    }

    private function getGlobalKey(string $classname, int $id): string
    {
        return sprintf('%s.%d', $classname, $id);
    }
}
