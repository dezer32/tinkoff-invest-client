<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Operations;

use DateTimeInterface;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;

class OperationsCondition extends BaseDataTransferObject
{
    public DateTimeInterface $from;
    public DateTimeInterface $to;
    public ?string $figi;
}
