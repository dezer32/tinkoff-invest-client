<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

use Spatie\DataTransferObject\Attributes\MapFrom;

class BrokerAccountId extends BaseDataTransferObject
{
    #[MapFrom(0)]
    public string $brokerAccountId;

    public function getBrokerAccountId(): string
    {
        return $this->brokerAccountId;
    }
}
