<?php

namespace Devavi\Architecture\Calculation;

use Devavi\Architecture\Calculation\Term;

class Multiply extends Term
{
    public function calc()
    {
        return $this->childrenLeft->calc() * $this->childrenRight->calc();
    }
}
