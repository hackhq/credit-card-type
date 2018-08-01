<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Aura
 * @package CreditCardType\Types
 */
class Aura implements CreditCardTypeValidator
{

    const REGEX = '/^5[50]/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}