<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Dezer\TinkoffInvestApiClient\Enums\InstrumentTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class SearchByFigiPayload extends BaseDataTransferObject
{
    public string $figi;
    public string $ticker;
    public string $isin;
    public float $minPriceIncrement;
    public int $lot;
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
