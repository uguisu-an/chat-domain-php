<?php

namespace UguisuAn\Chat\Domain\Models;

use Exception;
use InvalidArgumentException;

class Conversation
{
    use HasId;

    protected $id;

    protected $participants;

    /**
     * @param Participant[] $participants 参加者
     */
    public function __construct(array $participants)
    {
        $this->participants = $participants;
    }

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
}
