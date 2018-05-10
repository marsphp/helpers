<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrayLastTest extends TestCase
{
    public function testGetArrayFirstContentWithoutCallback()
    {
        $array = $this->arrayDemo();
        $firstArray = array_first($array);

        $this->assertEquals($array[0], $firstArray);
    }

    public function testGetArrayFirstContentUsingCallback()
    {
        $array = $this->arrayDemo();
        $firstArray = array_first($array, function($item) {
            return $item['score'] === 14;
        });

        $this->assertEquals($array[0], $firstArray);
    }

    public function testGetArrayWasScoreIsHighContentUsingCallback()
    {
        $array = $this->arrayDemo();
        $firstArray = array_first($array, function($item) {
            return array_get($item, 'score') > 14;
        });

        $this->assertEquals($array[1], $firstArray);
        $this->assertArrayHasKey('first', $firstArray);
    }

    public function arrayDemo()
    {
        return [
            ['name' => 'Houssene Dao', 'score' => 14],
            ['name' => 'Hassane Dao', 'score' => 104, 'first' => false],
            ['name' => 'John Doe', 'score' => 53],
            ['name' => 'Karim Anoh', 'score' => 9707],
        ];
    }
}
