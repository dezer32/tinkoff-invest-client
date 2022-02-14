<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Operations;

use DateTimeInterface;
use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Dto\CurrencyValue;
use Dezer\Investing\Tinkoff\ApiClient\Enums\CurrencyEnum;
use Dezer\Investing\Tinkoff\ApiClient\Enums\InstrumentTypeEnum;
use Dezer\Investing\Tinkoff\ApiClient\Enums\OperationStatusEnum;
use Dezer\Investing\Tinkoff\ApiClient\Enums\OperationTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class Operation extends BaseDataTransferObject
{
    public string $id;
    #[CastWith(EnumCaster::class)]
    public OperationStatusEnum $status;
    /** @var ?Trade[] */
    #[CastWith(ArrayCaster::class, itemType: Trade::class)]
    public array $trades;
    public CurrencyValue $commission;
    #[CastWith(EnumCaster::class)]
    public CurrencyEnum $currency;
    public float $payment;
    public float $price;
    public int $quantity;
    public int $quantityExecuted;
    public string $figi;
    #[CastWith(EnumCaster::class)]
    public InstrumentTypeEnum $instrumentType;
    public bool $isMarginCall;
    public DateTimeInterface $date;
    #[CastWith(EnumCaster::class)]
    public OperationTypeEnum $operationType;

    public function getId(): string
    {
        return $this->id;
    }

    public function getStatus(): OperationStatusEnum
    {
        return $this->status;
    }

    public function getTrades(): ?array
    {
        return $this->trades;
    }

    public function getCommission(): CurrencyValue
    {
        return $this->commission;
    }

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    public function getPayment(): float
    {
        return $this->payment;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getQuantityExecuted(): int
    {
        return $this->quantityExecuted;
    }

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getInstrumentType(): InstrumentTypeEnum
    {
        return $this->instrumentType;
    }

    public function isMarginCall(): bool
    {
        return $this->isMarginCall;
    }

    public function getDate(): DateTimeInterface
    {
        return $this->date;
    }

    public function getOperationType(): OperationTypeEnum
    {
        return $this->operationType;
    }
}
