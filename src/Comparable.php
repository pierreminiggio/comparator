<?php

namespace PierreMiniggio\Comparator;

interface Comparable
{

    /**
     * @param mixed $a 
     * @param mixed $b
     *  
     * @return bool
     */
    public function areEquals($a, $b);

    /**
     * @param mixed $a 
     * @param mixed $b
     *  
     * @return bool
     */
    public function isAGreaterThanB($a, $b);

    /**
     * Create new comparaison
     * 
     * @param mixed $a 
     * 
     * @return Comparator
     */
    public function is($a);

}
