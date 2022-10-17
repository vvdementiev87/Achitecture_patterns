<?php

use Devavi\Architecture\Model\User;
use Devavi\Architecture\Services\EmailNotificationService;
use Devavi\Architecture\Services\SMSNotificationService;
use Devavi\Architecture\Vendor\SMSer;

spl_autoload_register('load');

function load($className)
{
    $file = $className . ".php";
    $nameSpace = "Devavi\Architecture";
    $file = str_replace($nameSpace, "src", $file);
    $file = str_replace("\\", "/", $file);
    $file = str_replace("_", "/", $file);
    if (file_exists($file)) {
        include $file;
    }
};

$user1 = new User('Александр', 'alex@email.ru', '+123');
$user2 = new User('Федор', 'fedya@email.ru');

$notificationService = new EmailNotificationService();
$notificationService->notifyUser($user1);
$notificationService->notifyUser($user2);
echo '__________________________' . PHP_EOL;
$notificationService = new SMSNotificationService(new SMSer(), $notificationService);
$notificationService->notifyUser($user1);
$notificationService->notifyUser($user2);
