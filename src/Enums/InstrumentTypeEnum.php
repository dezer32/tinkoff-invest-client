<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self STOCK
 * @method static self CURRENCY
 */
class InstrumentTypeEnum extends Enum
{
    private const STOCK = 'Stock';

    private const CURRENCY = 'Currency';

    private const BOND = 'Bond';

    private const ETF = 'Etf';
}
