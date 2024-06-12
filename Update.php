<?php


namespace ustadev\telegram;

use ustadev\telegram\traits\CallbackQuery;
use ustadev\telegram\traits\ChannelPost;
use ustadev\telegram\traits\EditedChannelPost;
use ustadev\telegram\traits\InlineQuery;
use ustadev\telegram\traits\Message;

class Update extends Objects
{
    use Message, CallbackQuery, InlineQuery;
    use ChannelPost, EditedChannelPost;
}