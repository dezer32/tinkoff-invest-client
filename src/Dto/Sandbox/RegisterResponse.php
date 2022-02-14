<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Sandbox;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class RegisterResponse extends BaseResponse
{
    public RegisterPayload $payload;

    public function getPayload(): RegisterPayload
    {
        return $this->payload;
    }
}
