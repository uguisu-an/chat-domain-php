<?php

namespace UguisuAn\Chat\Domain\Models;

/**
 * 会話の参加者
 */
class Participant
{
    protected $userId;

    protected $role;

    public function __construct(UserId $userId, Role $role)
    {
        $this->userId = $userId;
        $this->role = $role;
    }

    public function userId()
    {
        return $this->userId;
    }
}
