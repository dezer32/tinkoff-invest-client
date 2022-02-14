<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;

class OrderBookCondition extends BaseDataTransferObject
{
    public string $figi;
    public int $depth;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }
}
