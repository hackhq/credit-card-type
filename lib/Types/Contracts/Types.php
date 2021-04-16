<?php
namespace CreditCardType\Types\Contracts;

use Garoevans\PhpEnum\Enum;

/**
 * Class Types
 * @package CreditCardType\Types
 */
class Types extends Enum
{

    const __default = self::UNKNOWN;

    const AMEX = 'amex';
    const DINERS = 'diners';
    const VISA = 'visa';
    const MASTERCARD = 'mastercard';
    const MAESTRO = 'maestro';
    const DISCOVER = 'discover';
    const HIPERCARD = 'hipercard';
    const ELO = 'elo';
    const JCB = 'jcb';
    const AURA = 'aura';
    const ELECTRON = 'electron';
    const UNIONPAY = 'unionpay';
    const LASER = 'laser';
    const HIPER =  'hiper';
    const VISAELECTRON = 'VISAELECTRON';

    const UNKNOWN = 'unknown';
}
