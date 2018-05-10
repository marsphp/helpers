<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrayGetTest extends TestCase
{
    public function testGetArrayNameKey()
    {
        $array = $this->arrayDemo();
        $name = array_get($array, 'name');

        $this->assertEquals($name, 'Mars Helpers');
    }

    public function testGetArrayCountryNameFromToKey()
    {
        $array = $this->arrayDemo();
        $name = array_get($array, 'country.name');

        $this->assertEquals($name, 'Côte d\'ivoire');
    }

    public function testGetArrayArticleTitleToIndexZero()
    {
        $array = $this->arrayDemo();
        $name = array_get($array, 'articles.0.title');

        $this->assertEquals($name, 'Hello world');
    }

    public function testCheckDefaultValueContentIfKeyDoesNotExist()
    {
        $array = $this->arrayDemo();
        $name = array_get($array, 'articles.0.content');

        $this->assertEquals($name, null);
    }

    public function testCheckDefaultValueContentIfKeyDoesNotExistAndSetNewValue()
    {
        $array = $this->arrayDemo();
        $name = array_get($array, 'articles.0.content', 'Lorem ipsum dolor');

        $this->assertEquals($name, 'Lorem ipsum dolor');
    }

    public function arrayDemo()
    {
        return [
            'name' => 'Mars Helpers',
            'country' => [
                'name' => 'Côte d\'ivoire',
                'iso' => 'CI'
            ],
            "articles" => [
                [
                    'title' => 'Hello world',
                    'author' => 'John Doe'
                ],
                [
                    'title' => 'Hello earth',
                    'author' => 'John Doe'
                ]
            ]
        ];
    }
}
