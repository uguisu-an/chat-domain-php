<?php

namespace Tests\Unit;

use DateTime;
use Tests\TestCase;
use UguisuAn\Chat\Domain\Models\UserId;
use UguisuAn\Chat\Domain\Models\Message;
use UguisuAn\Chat\Domain\Models\ConversationId;
use UguisuAn\Chat\Domain\Models\MessageId;

class ReadMessageTest extends TestCase
{
    public function test_メッセージに既読をつける()
    {
        $message = new Message(new UserId('1'), new ConversationId('1'), 'Hello World');
        $message->setId(new MessageId('message-id'));
        $readMessage = $message->markAsReadBy(new UserId('2'), new DateTime());

        $this->assertEquals('message-id', $readMessage->messageId()->value());
    }
}
