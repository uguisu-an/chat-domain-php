<?php

namespace UguisuAn\Chat\Domain\Models;

use Exception;
use InvalidArgumentException;

/**
 * 会話
 */
class Conversation
{
    protected $id;

    protected $participants = [];

    public function id(): ConversationId
    {
        if (!$this->id) {
            throw new Exception('ID is not set');
        }
        return $this->id;
    }

    public function setId(ConversationId $id): void
    {
        if ($this->id) {
            throw new InvalidArgumentException('ID is already set');
        }
        $this->id = $id;
    }

    public function participants(): array
    {
        return array_values($this->participants);
    }

    /**
     * 参加者を追加する
     */
    public function addParticipant(UserId $userId, Role $role)
    {
        $this->participants[$userId->value()] = new Participant($userId, $role);
    }

    /**
     * 参加者を削除する
     */
    public function removeParticipant(UserId $userId)
    {
        unset($this->participants[$userId->value()]);
    }

    /**
     * 参加者を取得する
     */
    public function getParticipant(UserId $userId): ?Participant
    {
        return $this->participants[$userId->value()] ?? null;
    }

    /**
     * メッセージを送る
     */
    public function sendMessage(UserId $userId, string $text): Message
    {
        return new Message($userId, $this->id(), $text);
    }
}
