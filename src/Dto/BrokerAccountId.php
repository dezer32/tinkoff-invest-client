<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

class BrokerAccountId extends BaseDataTransferObject
{
    public string $brokerAccountId;

    public function getBrokerAccountId(): string
    {
        return $this->brokerAccountId;
    }
}
