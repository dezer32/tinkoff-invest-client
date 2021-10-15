<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Dto\CurrencyValue;
use Dezer\TinkoffInvestApiClient\Enums\InstrumentTypeEnum;

class Position extends BaseDataTransferObject
{
    public string $figi;
    public string $ticker;
    public string $isin;
    public InstrumentTypeEnum $instrumentType;
    public float $balance;
    public float $blocked;
    public CurrencyValue $expectedYield;
    public int $lots;
    public CurrencyValue $averagePositionPrice;
    public CurrencyValue $averagePositionPriceNoNkd;
    public string $name;

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

    public function getInstrumentType(): InstrumentTypeEnum
    {
        return $this->instrumentType;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getBlocked(): float
    {
        return $this->blocked;
    }

    public function getExpectedYield(): CurrencyValue
    {
        return $this->expectedYield;
    }

    public function getLots(): int
    {
        return $this->lots;
    }

    public function getAveragePositionPrice(): CurrencyValue
    {
        return $this->averagePositionPrice;
    }

    public function getAveragePositionPriceNoNkd(): CurrencyValue
    {
        return $this->averagePositionPriceNoNkd;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
