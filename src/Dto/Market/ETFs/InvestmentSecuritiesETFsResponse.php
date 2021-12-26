<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market\ETFs;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class InvestmentSecuritiesETFsResponse extends BaseResponse
{
    public InvestmentSecuritiesETFsPayload $payload;

    public function getPayload(): InvestmentSecuritiesETFsPayload
    {
        return $this->payload;
    }
}
