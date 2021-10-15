<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class CreatedOrderResponse extends BaseResponse
{
    public CreatedOrderPayload $payload;

    public function getPayload(): CreatedOrderPayload
    {
        return $this->payload;
    }
}
