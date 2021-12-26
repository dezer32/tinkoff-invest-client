<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market\Currencies;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class InvestmentSecuritiesCurrenciesResponse extends BaseResponse
{
    public InvestmentSecuritiesCurrenciesPayload $payload;

    public function getPayload(): InvestmentSecuritiesCurrenciesPayload
    {
        return $this->payload;
    }
}
