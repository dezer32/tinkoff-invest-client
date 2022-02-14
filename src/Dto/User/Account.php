<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\User;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Enums\BrokerAccountTypeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class Account extends BaseDataTransferObject
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
