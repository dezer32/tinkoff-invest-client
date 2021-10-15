<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class CurrenciesResponse extends BaseResponse
{
    public CurrenciesPayload $payload;

    public function getPayload(): CurrenciesPayload
    {
        return $this->payload;
    }
}
