<?php

namespace UguisuAn\Chat\Domain\Models;

/**
 * 会話の参加者
 */
class Participant
{
    protected $userId;

    public function __construct(UserId $userId)
    {
        $this->userId = $userId;
    }
}
