<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\OperationStatusEnum;
use Dezer\TinkoffInvestApiClient\Enums\OperationTypeEnum;
use Dezer\TinkoffInvestApiClient\Enums\OrderTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class Order extends BaseDataTransferObject
{
    public string $orderId;
    public string $figi;
    #[CastWith(EnumCaster::class)]
    public OperationTypeEnum $operation;
    #[CastWith(EnumCaster::class)]
    public OperationStatusEnum $status;
    public int $requestedLots;
    public int $executedLots;
    #[CastWith(EnumCaster::class)]
    public OrderTypeEnum $type;
    public float $price;

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getOperation(): OperationTypeEnum
    {
        return $this->operation;
    }

    public function getStatus(): OperationStatusEnum
    {
        return $this->status;
    }

    public function getRequestedLots(): int
    {
        return $this->requestedLots;
    }

    public function getExecutedLots(): int
    {
        return $this->executedLots;
    }

    public function getType(): OrderTypeEnum
    {
        return $this->type;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
