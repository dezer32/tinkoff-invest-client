<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self STOCK
 * @method static self CURRENCY
 */
class InstrumentTypeEnum extends Enum
{
    private const STOCK = 'Stock';
    private const CURRENCY = 'Currency';
}
