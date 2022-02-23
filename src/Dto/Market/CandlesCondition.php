<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use DateTimeInterface;
use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Enums\IntervalEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class CandlesCondition extends BaseDataTransferObject
{
    public string $figi;
    public DateTimeInterface $from;
    public DateTimeInterface $to;
    #[CastWith(EnumCaster::class)]
    public IntervalEnum $interval;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getFrom(): DateTimeInterface
    {
        return $this->from;
    }

    public function getTo(): DateTimeInterface
    {
        return $this->to;
    }

    public function getInterval(): IntervalEnum
    {
        return $this->interval;
    }
}
