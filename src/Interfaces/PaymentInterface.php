<?php

namespace Devavi\Architecture\Interfaces;

interface PaymentInterface
{
    public function pay(float $total, string $phone);
}
