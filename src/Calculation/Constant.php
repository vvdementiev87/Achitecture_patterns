<?php

namespace Devavi\Architecture\Calculation;

use Devavi\Architecture\Calculation\Term;

class Constant extends Term
{
    public function calc()
    {
        return $this->var;
    }
}
