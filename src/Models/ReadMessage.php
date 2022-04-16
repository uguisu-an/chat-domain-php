<?php

namespace UguisuAn\Chat\Domain\Models;

use DateTimeInterface;

class ReadMessage
{
    protected $userId;

    protected $messageId;

    protected $readAt;

    public function __construct(UserId $userId, MessageId $messageId, DateTimeInterface $readAt)
    {
        $this->userId = $userId;
        $this->messageId = $messageId;
        $this->readAt = $readAt;
    }

    public function userId()
    {
        return $this->userId;
    }

    public function messageId()
    {
        return $this->messageId;
    }

    public function readAt()
    {
        return $this->readAt;
    }
}
