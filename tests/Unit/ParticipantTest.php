<?php

namespace Tests\Unit;

use Tests\TestCase;
use UguisuAn\Chat\Domain\Models\Conversation;
use UguisuAn\Chat\Domain\Models\UserId;

class ParticipantTest extends TestCase
{
    public function test_参加者を追加する()
    {
        $conversation = new Conversation();
        $conversation->addParticipant(new UserId('user-id'));

        $this->assertEquals(1, count($conversation->participants()));
    }
}
