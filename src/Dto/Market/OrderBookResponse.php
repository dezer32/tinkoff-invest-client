<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class OrderBookResponse extends BaseResponse
{
    public OrderBookPayload $payload;

    public function getPayload(): OrderBookPayload
    {
        return $this->payload;
    }
}
