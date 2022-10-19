<?php

use Devavi\Architecture\Models\Order;
use Devavi\Architecture\Services\QiwiService;
use Devavi\Architecture\Services\WebMoneyService;
use Devavi\Architecture\Services\YandexService;
use Devavi\Architecture\Services\PaymentService;

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

$order1 = new Order(1200, '676-43-23');
$order2 = new Order(124.53, '234-12-56');
$order3 = new Order(12433.00, '234-12-56');

$service = new PaymentService(new QiwiService());
$service->makePayment($order1);
$service->setPaymentMethod(new YandexService())->makePayment($order2);
$service->setPaymentMethod(new WebMoneyService())->makePayment($order3);
