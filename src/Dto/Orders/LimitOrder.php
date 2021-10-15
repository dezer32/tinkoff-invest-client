<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\OperationTypeEnum;

class LimitOrder extends BaseDataTransferObject
{
    public string $figi;
    public int $lots;
    public OperationTypeEnum $operation;
    public float $price;

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

    public function getPrice(): float
    {
        return $this->price;
    }
}