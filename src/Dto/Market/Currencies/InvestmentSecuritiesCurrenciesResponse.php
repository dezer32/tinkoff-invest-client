<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Currencies;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class InvestmentSecuritiesCurrenciesResponse extends BaseResponse
{
    public InvestmentSecuritiesCurrenciesPayload $payload;

    public function getPayload(): InvestmentSecuritiesCurrenciesPayload
    {
        return $this->payload;
    }
}
