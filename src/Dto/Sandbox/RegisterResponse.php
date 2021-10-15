<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class RegisterResponse extends BaseResponse
{
    public RegisterPayload $payload;

    public function getPayload(): RegisterPayload
    {
        return $this->payload;
    }
}
