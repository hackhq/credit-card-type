<?php

namespace CreditCardType;

use CreditCardType\Types\Amex;
use CreditCardType\Types\Aura;
use CreditCardType\Types\DinersClub;
use CreditCardType\Types\Discover;
use CreditCardType\Types\Elo;
use CreditCardType\Types\Hipercard;
use CreditCardType\Types\Jcb;
use CreditCardType\Types\Laser;
use CreditCardType\Types\Maestro;
use CreditCardType\Types\Mastercard;
use CreditCardType\Types\Contracts\Types;
use CreditCardType\Types\UnionPay;
use CreditCardType\Types\Visa;
use CreditCardType\Types\Visaelectron;

/**
 * undocumented class
 *
 * @package default
 * @author wbianchini
 **/
class CreditCardType
{
    /**
     * @param  int
     * @return string
     */
    public static function get($cardNumber)
    {
        $cardNumber = preg_replace(
            '/[^0-9]/', '', $cardNumber
        );

        if (Maestro::valid($cardNumber)) {
            return Types::MAESTRO;
        }
        if (DinersClub::valid($cardNumber)) {
            return Types::DINERS;
        }
        if (Laser::valid($cardNumber)) {
            return Types::LASER;
        }
        if (Jcb::valid($cardNumber)) {
            return Types::JCB;
        }
        if (UnionPay::valid($cardNumber)) {
            return Types::UNIONPAY;
        }
        if (Mastercard::valid($cardNumber)) {
            return Types::MASTERCARD;
        }
        if (Amex::valid($cardNumber)) {
            return Types::AMEX;
        }
        if (Elo::valid($cardNumber)) {
            return Types::ELO;
        }
        if (Discover::valid($cardNumber)) {
            return Types::DISCOVER;
        }
        if (Visa::valid($cardNumber)) {
            return Types::VISA;
        }
        if (Aura::valid($cardNumber)) {
            return Types::AURA;
        }
        if (Hipercard::valid($cardNumber)) {
            return Types::HIPERCARD;
        }
        if (Visaelectron::valid($cardNumber)) {
            return Types::VISAELECTRON;
        }

        return Types::UNKNOWN;
    }
}