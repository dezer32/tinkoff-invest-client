<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Orders;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Enums\OperationTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class CreateMarketOrderCondition extends BaseDataTransferObject
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
