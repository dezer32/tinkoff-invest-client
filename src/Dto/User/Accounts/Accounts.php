<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\User\Accounts;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class Accounts extends BaseDataTransferObject
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
