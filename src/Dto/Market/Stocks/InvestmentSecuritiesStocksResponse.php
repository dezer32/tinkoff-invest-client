<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Stocks;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class InvestmentSecuritiesStocksResponse extends BaseResponse
{
    public InvestmentSecuritiesStocksPayload $payload;

    public function getPayload(): InvestmentSecuritiesStocksPayload
    {
        return $this->payload;
    }
}
