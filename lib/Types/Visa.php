<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Visa
 * @package CreditCardType\Types
 */
class Visa implements CreditCardTypeValidator
{

    const REGEX = '/^4[0-9]{12}(?:[0-9]{3})/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}