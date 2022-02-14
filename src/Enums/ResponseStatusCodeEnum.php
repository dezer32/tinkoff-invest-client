<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static self OK
 * @method static self ERROR
 */
class ResponseStatusCodeEnum extends Enum
{
    private const OK = 'Ok';

    private const ERROR = 'Error';
}
