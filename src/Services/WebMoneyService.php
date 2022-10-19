<?php

namespace Devavi\Architecture\Services;

use Devavi\Architecture\Interfaces\PaymentInterface;

class WebMoneyService implements PaymentInterface
{

    public function pay(float $total, string $phone): void
    {
        echo "Принят платеж $total рублей от $phone через WebMoney" . PHP_EOL;
    }
}
