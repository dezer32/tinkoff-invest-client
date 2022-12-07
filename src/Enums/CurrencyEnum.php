<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self RUB
 * @method static self EUR
 * @method static self USD
 * @method static self CNY
 * @method static self HKD
 */
class CurrencyEnum extends Enum
{
    private const RUB = 'RUB';

    private const EUR = 'EUR';

    private const USD = 'USD';

    private const CNY = 'CNY';

    private const HKD = 'HKD';
}
