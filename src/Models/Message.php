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

    protected $text;

    public function __construct(UserId $userId, ConversationId $conversationId, string $text)
    {
        $this->userId = $userId;
        $this->conversationId = $conversationId;
        $this->text = $text;
    }

    /**
     * 既読をつける
     */
    public function markAsReadBy(UserId $userId, DateTimeInterface $readAt): ReadMessage
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

    public function userId()
    {
        return $this->userId;
    }

    public function conversationId()
    {
        return $this->conversationId;
    }

    public function text()
    {
        return $this->text;
    }
}
