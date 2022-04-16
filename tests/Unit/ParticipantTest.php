<?php

namespace Tests\Unit;

use Tests\TestCase;
use UguisuAn\Chat\Domain\Models\Role;
use UguisuAn\Chat\Domain\Models\UserId;
use UguisuAn\Chat\Domain\Models\Conversation;

class ParticipantTest extends TestCase
{
    public function test_参加者を追加する()
    {
        $conversation = new Conversation();

        $conversation->addParticipant(new UserId('user'));

        $this->assertEquals('user', $conversation->getParticipant(new UserId('user'))->userId()->value());
        $this->assertCount(1, $conversation->participants());
    }

    public function test_参加者を削除する()
    {
        $conversation = new Conversation();
        $conversation->addParticipant(new UserId('user-1'));
        $conversation->addParticipant(new UserId('user-2'));
        $conversation->addParticipant(new UserId('user-3'));

        $conversation->removeParticipant(new UserId('user-2'));

        $this->assertNull($conversation->getParticipant(new UserId('user-2')));
        $this->assertCount(2, $conversation->participants());
    }
}
