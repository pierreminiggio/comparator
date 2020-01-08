<?php

namespace PierreMiniggio\Comparator;

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
