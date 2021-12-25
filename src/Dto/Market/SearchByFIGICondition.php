<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\MapFrom;

class SearchByFIGICondition extends BaseDataTransferObject
{
    #[MapFrom(0)]
    public string $figi;

    public function getFigi(): string
    {
        return $this->figi;
    }
}
