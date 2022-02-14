<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto;

class EmptyResponse extends BaseResponse
{
    public array $payload = [];

    public function getPayload(): array
    {
        return $this->payload;
    }
}
