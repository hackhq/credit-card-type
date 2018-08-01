<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Mastercard
 * @package CreditCardType\Types
 */
class Mastercard implements CreditCardTypeValidator
{

    const REGEX = '/^5[1-5][0-9]{14}/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}