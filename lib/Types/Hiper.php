<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Hiper
 * @package CreditCardType\Types
 */
class Hiper implements CreditCardTypeValidator
{

    const REGEX = '/^63/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}