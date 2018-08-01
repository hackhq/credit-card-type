<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Amex
 * @package CreditCardType\Types
 */
class Amex implements CreditCardTypeValidator
{

    const REGEX = '/^3[47][0-9]{13}/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}