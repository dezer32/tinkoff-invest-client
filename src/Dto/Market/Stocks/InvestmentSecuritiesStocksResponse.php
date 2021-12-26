<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market\Stocks;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class InvestmentSecuritiesStocksResponse extends BaseResponse
{
    public InvestmentSecuritiesStocksPayload $payload;

    public function getPayload(): InvestmentSecuritiesStocksPayload
    {
        return $this->payload;
    }
}
