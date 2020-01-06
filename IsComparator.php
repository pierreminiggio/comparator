<?php

namespace Lib\math\Comparator;

trait IsComparator
{
    /**
     * Create new comparaison
     * 
     * @param float $a 
     * 
     * @return Comparator
     */
    public function is($a)
    {
        return new Comparator($this, $a);
    }
}
