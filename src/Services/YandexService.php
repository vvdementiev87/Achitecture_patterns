<?php

namespace Devavi\Architecture\Services;

use Devavi\Architecture\Interfaces\PaymentInterface;

class YandexService implements PaymentInterface
{
    public function pay(float $total, string $phone): void
    {
        echo "Принят платеж $total рублей от $phone. Спасибо, что воспользовались сервисами Yandex" . PHP_EOL;
    }
}
