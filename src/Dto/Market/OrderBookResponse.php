<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class OrderBookResponse extends BaseResponse
{
    public OrderBookPayload $payload;

    public function getPayload(): OrderBookPayload
    {
        return $this->payload;
    }
}
