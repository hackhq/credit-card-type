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
    public static function get($number)
    {
        if (Maestro::valid($number)) {
            return Types::MAESTRO;
        }
        if (DinersClub::valid($number)) {
            return Types::DINNERS;
        }
        if (Laser::valid($number)) {
            return Types::LASER;
        }
        if (Jcb::valid($number)) {
            return Types::JCB;
        }
        if (UnionPay::valid($number)) {
            return Types::UNIONPAY;
        }
        if (Mastercard::valid($number)) {
            return Types::MASTERCARD;
        }
        if (Amex::valid($number)) {
            return Types::AMEX;
        }
        if (Elo::valid($number)) {
            return Types::ELO;
        }
        if (Discover::valid($number)) {
            return Types::DISCOVER;
        }
        if (Visa::valid($number)) {
            return Types::VISA;
        }
        if (Aura::valid($number)) {
            return Types::AURA;
        }
        if (Hipercard::valid($number)) {
            return Types::HIPERCARD;
        }
//        if (Hiper::valid($number)) {
//            return Types::HIPER;
//        }
        if (Visaelectron::valid($number)) {
            return Types::VISAELECTRON;
        }

        return Types::UNKNOWN;
    }
}