<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountTypeEnum;

class Register extends BaseSandboxDataTransferObject
{
    public BrokerAccountTypeEnum $brokerAccountType;
}