<?php

namespace Devavi\Architecture\Services;

use Devavi\Architecture\Notifies\UserNotificationInterface;
use Devavi\Architecture\Model\User;

class EmailNotificationService implements UserNotificationInterface
{
    public function notifyUser(User $user): void
    {
        echo 'Отправка email на ' . $user->email . PHP_EOL;
    }
}
