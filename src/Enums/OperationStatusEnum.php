<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self NEW
 * @method static self DONE
 * @method static self FILL
 */
class OperationStatusEnum extends Enum
{
    private const NEW = 'New';

    private const DONE = 'Done';

    private const FILL = 'Fill';
}
