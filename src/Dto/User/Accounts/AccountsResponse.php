<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\User\Accounts;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class AccountsResponse extends BaseResponse
{
    public Accounts $payload;

    public function getPayload(): Accounts
    {
        return $this->payload;
    }
}
