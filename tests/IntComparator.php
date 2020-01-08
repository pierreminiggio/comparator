<?php

namespace PierreMiniggio\ComparatorTest;

use PierreMiniggio\Comparator\Comparable;
use PierreMiniggio\Comparator\IsComparator;

class IntComparator implements Comparable
{
    use IsComparator;

    /**
     * @param int $a 
     * @param int $b
     *  
     * @return bool
     */
    public function areEquals($a, $b) {
        return $a === $b;
    }

    /**
     * @param int $a 
     * @param int $b
     *  
     * @return bool
     */
    public function isAGreaterThanB($a, $b) {
        return $a > $b;
    }
}
