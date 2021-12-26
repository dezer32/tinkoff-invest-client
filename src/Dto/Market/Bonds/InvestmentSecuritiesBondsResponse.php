<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market\Bonds;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class InvestmentSecuritiesBondsResponse extends BaseResponse
{
    public InvestmentSecuritiesBondsPayload $payload;

    public function getPayload(): InvestmentSecuritiesBondsPayload
    {
        return $this->payload;
    }
}
