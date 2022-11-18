<?php

namespace Devavi\Architecture\Calculation;

use Devavi\Architecture\Calculation\Term;

class Exponent extends Term
{
    public function calc()
    {
        return pow($this->childrenLeft->calc(), $this->childrenRight->calc());
    }
}
