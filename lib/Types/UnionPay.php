<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class UnionPay
 * @package CreditCardType\Types
 */
class UnionPay implements CreditCardTypeValidator
{

    const REGEX = '/^62/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}