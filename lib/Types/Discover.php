<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Discover
 * @package CreditCardType\Types
 */
class Discover implements CreditCardTypeValidator
{

    const REGEX = '/^6(?:011|5[0-9]{2})[0-9]{12}/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}