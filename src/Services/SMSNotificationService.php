<?php

namespace Devavi\Architecture\Services;

use Devavi\Architecture\Notifies\UserNotificationInterface;
use Devavi\Architecture\Model\User;
use Devavi\Architecture\Vendor\SMSer;

class SMSNotificationService implements UserNotificationInterface
{
    private SMSer $smser;
    private EmailNotificationService $fallbackService;

    public function __construct(SMSer $smser, EmailNotificationService $fallbackService)
    {
        $this->fallbackService = $fallbackService;
        $this->smser = $smser;
    }

    public function notifyUser(User $user): void
    {
        if ($user->phone) {
            $this->smser->send($user->phone);
        } else {
            $this->fallbackService->notifyUser($user);
        }
    }
}
