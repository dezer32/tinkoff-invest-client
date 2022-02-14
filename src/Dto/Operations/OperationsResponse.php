<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Operations;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class OperationsResponse extends BaseResponse
{
    public OperationsPayload $payload;

    public function getPayload(): OperationsPayload
    {
        return $this->payload;
    }
}
