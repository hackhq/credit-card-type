<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Hipercard
 * @package CreditCardType\Types
 */
class Hipercard implements CreditCardTypeValidator
{

    const REGEX = '/^(38|60[0-9])/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}