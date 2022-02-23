<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Enums\IntervalEnum;
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
