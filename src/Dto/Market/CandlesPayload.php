<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\IntervalEnum;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class CandlesPayload extends BaseDataTransferObject
{
    public string $figi;
    #[CastWith(EnumCaster::class)]
    public IntervalEnum $interval;
    /** @var Candle[] */
    #[CastWith(ArrayCaster::class, itemType: Candle::class)]
    public array $candles;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getInterval(): IntervalEnum
    {
        return $this->interval;
    }

    public function getCandles(): array
    {
        return $this->candles;
    }
}
