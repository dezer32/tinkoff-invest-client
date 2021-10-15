<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\User;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountTypeEnum;

class Account extends BaseDataTransferObject
{
    public BrokerAccountTypeEnum $brokerAccountType;
    public string $brokerAccountId;

    public function getBrokerAccountType(): BrokerAccountTypeEnum
    {
        return $this->brokerAccountType;
    }

    public function getBrokerAccountId(): string
    {
        return $this->brokerAccountId;
    }
}
