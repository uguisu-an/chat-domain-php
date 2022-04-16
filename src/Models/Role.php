<?php

namespace UguisuAn\Chat\Domain\Models;

/**
 * 役割
 */
class Role
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }
}
