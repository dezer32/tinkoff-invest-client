<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use DateTimeInterface;
use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Enums\IntervalEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class Candle extends BaseDataTransferObject
{
    public string $figi;
    #[CastWith(EnumCaster::class)]
    public IntervalEnum $interval;
    public int $o;
    public int $c;
    public int $h;
    public int $l;
    public int $v;
    public DateTimeInterface $time;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getInterval(): IntervalEnum
    {
        return $this->interval;
    }

    public function getO(): int
    {
        return $this->o;
    }

    public function getC(): int
    {
        return $this->c;
    }

    public function getH(): int
    {
        return $this->h;
    }

    public function getL(): int
    {
        return $this->l;
    }

    public function getV(): int
    {
        return $this->v;
    }

    public function getTime(): DateTimeInterface
    {
        return $this->time;
    }
}
