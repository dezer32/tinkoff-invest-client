<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto;

class ErrorResponse extends BaseResponse
{
    public ErrorPayload $payload;

    public function getPayload(): ErrorPayload
    {
        return $this->payload;
    }
}
