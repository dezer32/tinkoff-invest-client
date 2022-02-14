<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\User;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class AccountsPayload extends BaseDataTransferObject
{
    /** @var Account[] */
    #[CastWith(ArrayCaster::class, itemType: Account::class)]
    public array $accounts;

    /** @return Account[] */
    public function getAccounts(): array
    {
        return $this->accounts;
    }
}
