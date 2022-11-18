<?php

namespace Devavi\Architecture\Calculation;

use Devavi\Architecture\Calculation\Term;

class Variable extends Term
{
    public function calc()
    {
        return $this->var;
    }
}
