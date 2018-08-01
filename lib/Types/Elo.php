<?php

namespace CreditCardType\Types;

use CreditCardType\Types\Contracts\CreditCardTypeValidator;

/**
 * Class Elo
 * @package CreditCardType\Types
 */
class Elo implements CreditCardTypeValidator
{

    const REGEX = '/^(431274|438935|451416|457393|504175|627780|636297|636368|651653|401178|401179|\b(4576[31-32])|\b(6504[85-90])|\b(6504[91-94])|\b(6516[52-54])|\b(65500[0-3])|506699|\b(506[700-778])|\b(509[000-999])|\b(6500[31-33])|\b(6500[35-51])|\b(6504[20-05])|\b(6504[20-39])|\b(650[485-538])|\b(650[541-598])|\b(6507[00-18])|\b(6507[20-27])|\b(6509[01-20])|\b(6516[52-79])|\b(6550[00-19])|\b(6550[21-58])|509040|509074)/';

    /**
     * @param $number
     * @return bool
     */
    public static function valid($number)
    {
        return preg_match(self::REGEX, $number);
    }
}