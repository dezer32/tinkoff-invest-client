<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self NORMAL_TRADING
 * @method static self NOT_AVAILABLE_TRADING
 */
class TradeStatusEnum extends Enum
{
    public const NORMAL_TRADING = 'NormalTrading';

    public const NOT_AVAILABLE_TRADING = 'NotAvailableForTrading';
}
