<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Enums\CurrencyEnum;
use Dezer\Investing\Tinkoff\ApiClient\Enums\InstrumentTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class Instrument extends BaseDataTransferObject
{
    public string $figi;
    public string $ticker;
    public string $isin;
    public float $minPriceIncrement;
    public int $lot;
    public int $minQuantity;
    #[CastWith(EnumCaster::class)]
    public CurrencyEnum $currency;
    public string $name;
    #[CastWith(EnumCaster::class)]
    public InstrumentTypeEnum $type;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getTicker(): string
    {
        return $this->ticker;
    }

    public function getIsin(): string
    {
        return $this->isin;
    }

    public function getMinPriceIncrement(): float
    {
        return $this->minPriceIncrement;
    }

    public function getLot(): int
    {
        return $this->lot;
    }

    public function getMinQuantity(): int
    {
        return $this->minQuantity;
    }

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): InstrumentTypeEnum
    {
        return $this->type;
    }
}
