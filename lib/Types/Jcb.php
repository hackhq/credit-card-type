<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Jcb
 * @package CreditCardType
 */
class Jcb implements CreditCardTypeValidator
{

    const REGEX = '/^35/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}