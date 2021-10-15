<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use DateTimeInterface;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\IntervalEnum;

class CandlesCondition extends BaseDataTransferObject
{
    public string $figi;
    public DateTimeInterface $from;
    public DateTimeInterface $to;
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
