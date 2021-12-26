<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\TradeStatusEnum;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class OrderBookPayload extends BaseDataTransferObject
{
    public string $figi;
    public int $depth;
    /** @var Bet[] */
    #[CastWith(ArrayCaster::class, itemType: Bet::class)]
    public array $bids;
    /** @var Bet[] */
    #[CastWith(ArrayCaster::class, itemType: Bet::class)]
    public array $asks;
    #[CastWith(EnumCaster::class)]
    public TradeStatusEnum $tradeStatus;
    public float $minPriceIncrement;
    public ?float $faceValue;
    public float $lastPrice;
    public float $closePrice;
    public float $limitUp;
    public float $limitDown;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function getBids(): array
    {
        return $this->bids;
    }

    public function getAsks(): array
    {
        return $this->asks;
    }

    public function getTradeStatus(): TradeStatusEnum
    {
        return $this->tradeStatus;
    }

    public function getMinPriceIncrement(): float
    {
        return $this->minPriceIncrement;
    }

    public function getFaceValue(): ?float
    {
        return $this->faceValue;
    }

    public function getLastPrice(): float
    {
        return $this->lastPrice;
    }

    public function getClosePrice(): float
    {
        return $this->closePrice;
    }

    public function getLimitUp(): float
    {
        return $this->limitUp;
    }

    public function getLimitDown(): float
    {
        return $this->limitDown;
    }
}
