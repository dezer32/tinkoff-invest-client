<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;

class SearchByTickerCondition extends BaseDataTransferObject
{
    public string $ticker;

    public function getTicker(): string
    {
        return $this->ticker;
    }
}
