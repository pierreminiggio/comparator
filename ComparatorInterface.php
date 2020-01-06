<?php

namespace Lib\math\Comparator;

interface ComparatorInterface
{
    public function areEquals($a, $b);

    public function isAGreaterThanB($a, $b);

    public function is($a);

}
