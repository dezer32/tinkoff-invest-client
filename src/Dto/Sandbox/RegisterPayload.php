<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class RegisterPayload extends BaseSandboxDataTransferObject
{
    #[CastWith(EnumCaster::class)]
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
