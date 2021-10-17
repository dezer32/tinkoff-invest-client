<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Operations;

use DateTimeInterface;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\MapFrom;

class OperationsCondition extends BaseDataTransferObject
{
    #[MapFrom(0)]
    public DateTimeInterface $from;
    #[MapFrom(1)]
    public DateTimeInterface $to;
    #[MapFrom(2)]
    public ?string $figi;
}
