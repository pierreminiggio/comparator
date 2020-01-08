<?php

namespace PierreMiniggio\ComparatorTest;

use PHPUnit\Framework\TestCase;

class IntComparatorTest extends TestCase
{
    const EQUAL = 'both are equal';
    const SMALLER = 'a is smaller';
    const GREATER = 'a is greater';

    public function testABunchOfStuff()
    {
        $compator = new IntComparator();
        $testCases = [
            ['a' => 1, 'b' => 1, 'state' => static::EQUAL],
            ['a' => 1, 'b' => 2, 'state' => static::SMALLER],
            ['a' => 2, 'b' => 1, 'state' => static::GREATER]
        ];

        foreach ($testCases as $testCase) {
            $this->assertSame($compator->is($testCase['a'])->equalTo($testCase['b']), in_array($testCase['state'], [static::EQUAL]));
            $this->assertSame($compator->is($testCase['a'])->greaterThan($testCase['b']), in_array($testCase['state'], [static::GREATER]));
            $this->assertSame($compator->is($testCase['a'])->smallerThan($testCase['b']), in_array($testCase['state'], [static::SMALLER]));
            $this->assertSame($compator->is($testCase['a'])->equalToOrGreaterThan($testCase['b']), in_array($testCase['state'], [static::EQUAL, static::GREATER]));
            $this->assertSame($compator->is($testCase['a'])->equalToOrSmallerThan($testCase['b']), in_array($testCase['state'], [static::EQUAL, static::SMALLER]));
        }

    }
}
