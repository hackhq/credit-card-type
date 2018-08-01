<?php
namespace CreditCardType\Types\Contracts;

/**
 * Interface CreditCardTypeValidator
 * @package CreditCardType\Types
 */
interface CreditCardTypeValidator
{

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number);
}