<?php
namespace CreditCardType\Types\Contracts;

/**
 * Interface CreditCardTypeValidator
 * @package CreditCardType\Types
 */
interface CreditCardTypeValidator
{

    /**
     * @param $cardNumber
     * @return bool
     */
    public static function valid($cardNumber);
}