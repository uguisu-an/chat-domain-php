<?php

namespace Chat\Domain\Models;

/**
 * メッセージ
 */
class Message
{
    use HasId;

    protected $userId;

    protected $conversationId;

    protected $body;

    public function __construct(UserId $userId, ConversationId $conversationId, string $body)
    {
        $this->userId = $userId;
        $this->conversationId = $conversationId;
        $this->body = $body;
    }
}
