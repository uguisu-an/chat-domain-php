<?php

namespace Tests\Unit;

use Tests\TestCase;
use UguisuAn\Chat\Domain\Models\Conversation;
use UguisuAn\Chat\Domain\Models\ConversationId;
use UguisuAn\Chat\Domain\Models\UserId;

class MessageTest extends TestCase
{
    public function test_メッセージを送る()
    {
        $conversation = new Conversation();
        $conversation->setId(new ConversationId('conversation'));

        $message = $conversation->sendMessage(new UserId('user'), 'hello world');

        $this->assertEquals('conversation', $message->conversationId()->value());
        $this->assertEquals('user', $message->userId()->value());
        $this->assertEquals('hello world', $message->text());
    }
}
