<?php

namespace Basic;

/**
 * Class Number
 * @package Basic
 */
class Number
{
    /**
     * Number value
     * @var int
     */
    protected $value = 0;

    /**
     * Roman representation for this number
     * @var string
     */
    protected $romanValue = null;

    /**
     * All roman symbols
     * @var array
     */
    protected $romanSymbols = [
        1000    => 'M',
        900     => 'CM',
        500     => 'D',
        400     => 'CD',
        100     => 'C',
        90      => 'XC',
        50      => 'L',
        40      => 'XL',
        10      => 'X',
        9       => 'IX',
        5       => 'V',
        4       => 'IV',
        1       => 'I'
    ];

    /**
     * Registry pattern as helper to build a number
     * @param Integer $number
     * @return Number
     */
    public static function instance($number)
    {
        return new Number($number);
    }

    /**
     * Get a new instance
     * @param $number
     */
    public function __construct($number)
    {
        $this->value = $number;
    }


    /**
     * Get the roman representation for the current number
     * @return string
     */
    public function toRoman()
    {
        if ($this->romanValue === null) {
            $this->romanValue = $this->buildRomanNumber();
        }

        return $this->romanValue;
    }

    /**
     * Convert numbers to romans
     * @return string
     */
    protected function buildRomanNumber()
    {
        $result = '';
        $number = $this->value;

        foreach ($this->romanSymbols as $value => $symbol) {
            while ($number >= $value) {
                $result .= $symbol;
                $number -= $value;
            }
        }

        return $result;
    }

}
