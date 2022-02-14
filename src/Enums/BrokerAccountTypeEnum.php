<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self TINKOFF
 * @method static self TEST_ACCOUNT
 */
class BrokerAccountTypeEnum extends Enum
{
    private const TINKOFF = 'Tinkoff';

    private const TEST_ACCOUNT = 'Test account';
}
