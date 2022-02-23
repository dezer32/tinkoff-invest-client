<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Bonds;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class InvestmentSecuritiesBondsResponse extends BaseResponse
{
    public InvestmentSecuritiesBondsPayload $payload;

    public function getPayload(): InvestmentSecuritiesBondsPayload
    {
        return $this->payload;
    }
}
