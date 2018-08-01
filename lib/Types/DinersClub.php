<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class DinersClub
 * @package CreditCardType\Types
 */
class DinersClub implements CreditCardTypeValidator
{

    const REGEX = '/^(36|38|30[0-5])/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}