<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self RUB
 * @method static self EUR
 * @method static self USD
 */
class CurrencyEnum extends Enum
{
    private const RUB = 'RUB';
    private const EUR = 'EUR';
    private const USD = 'USD';
}
