<?php

namespace Devavi\Architecture\Notifies;

use Devavi\Architecture\Model\User;

interface UserNotificationInterface
{
    public function notifyUser(User $user): void;
}
