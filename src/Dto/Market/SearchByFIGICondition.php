<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;

class SearchByFIGICondition extends BaseDataTransferObject
{
    public string $figi;

    public function getFigi(): string
    {
        return $this->figi;
    }
}
