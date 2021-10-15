<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;

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
