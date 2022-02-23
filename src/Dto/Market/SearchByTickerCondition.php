<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
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
