<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\User;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class AccountsResponse extends BaseResponse
{
    public AccountsPayload $payload;

    public function getPayload(): AccountsPayload
    {
        return $this->payload;
    }
}
