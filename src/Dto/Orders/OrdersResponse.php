<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class OrdersResponse extends BaseResponse
{
    public OrdersPayload $payload;

    public function getPayload(): OrdersPayload
    {
        return $this->payload;
    }
}
