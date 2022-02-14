<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Orders;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Dto\CurrencyValue;
use Dezer\Investing\Tinkoff\ApiClient\Enums\OperationStatusEnum;
use Dezer\Investing\Tinkoff\ApiClient\Enums\OperationTypeEnum;
use Ramsey\Uuid\UuidInterface;
use Spatie\DataTransferObject\Attributes\CastWith;

class CreatedOrderPayload extends BaseDataTransferObject
{
    public UuidInterface $orderId;
    #[CastWith(EnumCaster::class)]
    public OperationTypeEnum $operation;
    #[CastWith(EnumCaster::class)]
    public OperationStatusEnum $status;
    public string $rejectReason;
    public string $message;
    public int $requestedLots;
    public int $executedLots;
    public CurrencyValue $commission;

    public function getOrderId(): UuidInterface
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
