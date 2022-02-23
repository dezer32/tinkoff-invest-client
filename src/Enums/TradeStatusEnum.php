<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Enums;

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
