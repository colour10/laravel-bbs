<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;

class EmailVerifiedListener
{
    /**
     * Handle the event.
     *
     * @param Verified $event
     * @return void
     */
    public function handle(Verified $event)
    {
        // 会话里闪存认证成功后的消息提醒
        session()->flash('success', '邮箱验证成功 ^_^');
    }
}
