<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Visaelectron
 * @package CreditCardType\Types
 */
class Visaelectron implements CreditCardTypeValidator
{

    const REGEX = '/^4[026][17500][508][844][913][917]/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}