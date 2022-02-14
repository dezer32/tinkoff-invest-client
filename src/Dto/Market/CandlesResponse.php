<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class CandlesResponse extends BaseResponse
{
    public CandlesPayload $payload;

    public function getPayload(): CandlesPayload
    {
        return $this->payload;
    }
}
