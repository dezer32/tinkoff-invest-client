<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class Register extends BaseSandboxDataTransferObject
{
    #[CastWith(EnumCaster::class)]
    public BrokerAccountTypeEnum $brokerAccountType;
}
