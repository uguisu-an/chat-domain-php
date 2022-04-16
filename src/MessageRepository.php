<?php

namespace UguisuAn\Chat\Domain\Models;

interface MessageRepository
{
    public function save(Message $message): MessageId;

    public function find(MessageId $messageId): ?Message;
}
