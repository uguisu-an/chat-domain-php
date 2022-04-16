<?php

namespace UguisuAn\Chat\Domain\Models;

class Id
{
    protected $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
