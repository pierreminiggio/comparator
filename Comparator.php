<?php

namespace Lib\math\Comparator;

class Comparator
{

    private $c;
    private $a;

    /**
     * @param ComparatorInterface $c 
     * @param mixed $a
     * 
     * @return static
     */
    public function __construct(ComparatorInterface $c, $a)
    {
        $this->c = $c;
        $this->a = $a;
    }

    /**
     * @param mixed $b 
     * 
     * @return bool
     */
    public function equalTo($b)
    {
        return $this->c->areEquals($this->a, $b);
    }

    /**
     * @param mixed $b 
     * 
     * @return bool
     */
    public function greaterThan($b)
    {
        return $this->c->isAGreaterThanB($this->a, $b);
    }

    /**
     * @param mixed $b 
     * 
     * @return bool
     */
    public function smallerThan($b)
    {
        return $this->c->isAGreaterThanB($b, $this->a);
    }
}
