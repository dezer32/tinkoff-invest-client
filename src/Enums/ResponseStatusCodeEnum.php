<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Enums;

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
