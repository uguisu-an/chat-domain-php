<?php

namespace Chat\Domain\Models;

interface ConversationRepository
{
    public function save(Conversation $conversation): ConversationId;

    public function find(ConversationId $conversationId): ?Conversation;
}
