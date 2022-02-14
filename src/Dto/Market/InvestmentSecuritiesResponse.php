<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class InvestmentSecuritiesResponse extends BaseResponse
{
    public InvestmentSecuritiesPayload $payload;

    public function getPayload(): InvestmentSecuritiesPayload
    {
        return $this->payload;
    }
}
