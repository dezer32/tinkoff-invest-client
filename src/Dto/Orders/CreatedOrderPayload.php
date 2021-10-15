<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Dto\CurrencyValue;
use Dezer\TinkoffInvestApiClient\Enums\OperationStatusEnum;
use Dezer\TinkoffInvestApiClient\Enums\OperationTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class CreatedOrderPayload extends BaseDataTransferObject
{
    public string $orderId;
    #[CastWith(EnumCaster::class)]
    public OperationTypeEnum $operation;
    #[CastWith(EnumCaster::class)]
    public OperationStatusEnum $status;
    public string $rejectReason;
    public string $message;
    public int $requestedLots;
    public int $executedLots;
    public CurrencyValue $commission;

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getOperation(): OperationTypeEnum
    {
        return $this->operation;
    }

    public function getStatus(): OperationStatusEnum
    {
        return $this->status;
    }

    public function getRejectReason(): string
    {
        return $this->rejectReason;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getRequestedLots(): int
    {
        return $this->requestedLots;
    }

    public function getExecutedLots(): int
    {
        return $this->executedLots;
    }

    public function getCommission(): CurrencyValue
    {
        return $this->commission;
    }
}
