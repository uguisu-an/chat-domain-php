<?php

namespace UguisuAn\Chat\Domain\Models;

interface ReadMessageRepository
{
    public function save(ReadMessage $readMessage): void;
}
