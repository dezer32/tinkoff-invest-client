<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class InvestmentSecuritiesResponse extends BaseResponse
{
    public InvestmentSecuritiesPayload $payload;

    public function getPayload(): InvestmentSecuritiesPayload
    {
        return $this->payload;
    }
}
