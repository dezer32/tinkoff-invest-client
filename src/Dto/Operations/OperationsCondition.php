<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Operations;

use DateTimeInterface;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;

class OperationsCondition extends BaseDataTransferObject
{
    public DateTimeInterface $from;
    public DateTimeInterface $to;
    public ?string $figi;

    public function getFrom(): DateTimeInterface
    {
        return $this->from;
    }

    public function getTo(): DateTimeInterface
    {
        return $this->to;
    }

    public function getFigi(): ?string
    {
        return $this->figi;
    }
}
