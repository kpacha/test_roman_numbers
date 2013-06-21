<?php

use \Basic\Number;

class NumberTest extends \PHPUnit_Framework_TestCase
{
    public function testNumbersFrom1To3()
    {
        $this->assertEquals('I', Number::instance(1)->toRoman());
        $this->assertEquals('II', Number::instance(2)->toRoman());
    }

    public function test4()
    {
        $this->assertEquals('IV', Number::instance(4)->toRoman());
    }

    public function testNumbersFrom5To8()
    {
        $this->assertEquals('V', Number::instance(5)->toRoman());
        $this->assertEquals('VI', Number::instance(6)->toRoman());
    }

    public function test9()
    {
        $this->assertEquals('IX', Number::instance(9)->toRoman());
    }

    public function testNumbersFrom10To13()
    {
        $this->assertEquals('X', Number::instance(10)->toRoman());
        $this->assertEquals('XI', Number::instance(11)->toRoman());
        $this->assertEquals('XIII', Number::instance(13)->toRoman());
    }

    public function test14()
    {
        $this->assertEquals('XIV', Number::instance(14)->toRoman());
    }

    public function test98()
    {
        $this->assertEquals('XC' . 'VIII', Number::instance(98)->toRoman());
    }

    public function test1999()
    {
        $this->assertEquals(
            'M' . 'CM' . 'XC' . 'IX', Number::instance(1999)->toRoman()
        );
    }

    public function test0()
    {
        $this->assertEquals(null, Number::instance(0)->toRoman());
    }

}