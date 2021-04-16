<?php

namespace Tests\Unit;

use CreditCardType\CreditCardType;
use CreditCardType\Types\Contracts\Types;
use PHPUnit\Framework\TestCase;

class CreditCardTypeTest extends TestCase
{

    public function creditCards()
    {
        return [
            [Types::VISA, '4364282255060937'],
            [Types::MASTERCARD, '5159003402557062'],
            [Types::AMEX, '345365682488334'],
            [Types::AMEX, '3435 758259 65384'],
            [Types::DINERS, '3020882585450951'],
            [Types::DINERS, '3020.8825.8545.0951'],
            [Types::MAESTRO, '5893888145810658'],
            [Types::DISCOVER, '6011172788970508'],
            [Types::HIPERCARD, '6062824669664976'],
            [Types::ELO, '5067278447590499'],
            [Types::JCB, '3538241252897124'],
            [Types::AURA, '5078607457167573'],
            [Types::UNIONPAY, '6298467661294347'],
        ];
    }

    /**
     * @dataProvider creditCards
     * @param $type
     * @param $number
     */
    public function testCreditCardNumbers($type, $number)
    {
        $this->assertEquals($type, CreditCardType::get($number));
    }
}