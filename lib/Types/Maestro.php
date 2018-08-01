<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Maestro
 * @package CreditCardType\Types
 */
class Maestro implements CreditCardTypeValidator
{

    const REGEX = '/^(5(018|0[23]|[68])|6(39|7))/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}