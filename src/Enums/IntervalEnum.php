<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self MIN_1
 * @method static self MIN_2
 * @method static self MIN_3
 * @method static self MIN_5
 * @method static self MIN_10
 * @method static self MIN_15
 * @method static self MIN_30
 * @method static self HOUR
 * @method static self DAY
 * @method static self WEEK
 * @method static self MONTH
 */
class IntervalEnum extends Enum
{
    private const MIN_1 = "1min";

    private const MIN_2 = "2min";

    private const MIN_3 = "3min";

    private const MIN_5 = "5min";

    private const MIN_10 = "10min";

    private const MIN_15 = "15min";

    private const MIN_30 = "30min";

    private const HOUR = "hour";

    private const DAY = "day";

    private const WEEK = "week";

    private const MONTH = "month";
}
