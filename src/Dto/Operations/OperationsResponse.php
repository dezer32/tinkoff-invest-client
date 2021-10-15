<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Operations;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class OperationsResponse extends BaseResponse
{
    public OperationsPayload $payload;

    public function getPayload(): OperationsPayload
    {
        return $this->payload;
    }
}
