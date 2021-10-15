<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\OperationTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class MarketOrder extends BaseDataTransferObject
{
    public string $figi;
    public int $lots;
    #[CastWith(EnumCaster::class)]
    public OperationTypeEnum $operation;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getLots(): int
    {
        return $this->lots;
    }

    public function getOperation(): OperationTypeEnum
    {
        return $this->operation;
    }
}
