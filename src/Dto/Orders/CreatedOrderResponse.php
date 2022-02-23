<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Orders;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class CreatedOrderResponse extends BaseResponse
{
    public CreatedOrderPayload $payload;

    public function getPayload(): CreatedOrderPayload
    {
        return $this->payload;
    }
}
