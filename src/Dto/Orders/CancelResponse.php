<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class CancelResponse extends BaseResponse
{
    public CancelPayload $payload;

    public function getPayload(): CancelPayload
    {
        return $this->payload;
    }
}
