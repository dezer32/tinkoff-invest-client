<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\MapFrom;

class SearchByTickerCondition extends BaseDataTransferObject
{
    #[MapFrom(0)]
    public string $ticker;

    public function getTicker(): string
    {
        return $this->ticker;
    }
}
