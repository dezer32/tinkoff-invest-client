<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class CandlesResponse extends BaseResponse
{
    public CandlesPayload $payload;

    public function getPayload(): CandlesPayload
    {
        return $this->payload;
    }
}
