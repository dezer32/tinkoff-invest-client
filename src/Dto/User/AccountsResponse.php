<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\User;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class AccountsResponse extends BaseResponse
{
    public AccountsPayload $payload;

    public function getPayload(): AccountsPayload
    {
        return $this->payload;
    }
}
