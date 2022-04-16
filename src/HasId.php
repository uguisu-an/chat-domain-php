<?php

namespace UguisuAn\Chat\Domain\Models;

use Exception;
use InvalidArgumentException;

trait HasId
{
    protected $id;

    public function id()
    {
        if (!$this->id) {
            throw new Exception('ID is not set');
        }
        return $this->id;
    }

    public function setId($id): void
    {
        if ($this->id) {
            throw new InvalidArgumentException('ID is already set');
        }
        $this->id = $id;
    }
}
