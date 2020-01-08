<?php

namespace PierreMiniggio\Comparator;

interface Comparable
{
    public function areEquals($a, $b);

    public function isAGreaterThanB($a, $b);

    public function is($a);

}
