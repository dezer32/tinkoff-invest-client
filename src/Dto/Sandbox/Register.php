<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountType;

class Register extends BaseDataTransferObject
{
    public BrokerAccountType $brokerAccountType;
}