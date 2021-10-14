<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Operations;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class OperationsResponse extends BaseResponse
{
    public Operations $payload;

    public function getPayload(): Operations
    {
        return $this->payload;
    }
}
