<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Laser
 * @package CreditCardType\Types
 */
class Laser implements CreditCardTypeValidator
{

    const REGEX = '/^(6706|6771|6709)/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}