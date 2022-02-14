<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Orders;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class OrdersResponse extends BaseResponse
{
    public OrdersPayload $payload;

    public function getPayload(): OrdersPayload
    {
        return $this->payload;
    }
}
