<?php

namespace UguisuAn\Chat\Domain\Models;

use Exception;
use InvalidArgumentException;

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

    public function addParticipant(UserId $userId)
    {
        $this->participants[$userId->value()] = new Participant($userId);
    }

    public function removeParticipant(UserId $userId)
    {
        unset($this->participants[$userId->value()]);
    }

    public function getParticipant(UserId $userId): ?Participant
    {
        return $this->participants[$userId->value()] ?? null;
    }
}
