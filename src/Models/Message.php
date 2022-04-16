<?php

namespace UguisuAn\Chat\Domain\Models;

use Exception;
use DateTimeInterface;
use InvalidArgumentException;

/**
 * メッセージ
 */
class Message
{
    protected $id;

    protected $userId;

    protected $conversationId;

    protected $body;

    public function __construct(UserId $userId, ConversationId $conversationId, string $body)
    {
        $this->userId = $userId;
        $this->conversationId = $conversationId;
        $this->body = $body;
    }

    public function readBy(UserId $userId, DateTimeInterface $readAt): ReadMessage
    {
        return new ReadMessage($userId, $this->id, $readAt);
    }

    public function id(): MessageId
    {
        if (!$this->id) {
            throw new Exception('ID is not set');
        }
        return $this->id;
    }

    public function setId(MessageId $id): void
    {
        if ($this->id) {
            throw new InvalidArgumentException('ID is already set');
        }
        $this->id = $id;
    }
}
