<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market\ETFs;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class InvestmentSecuritiesETFsResponse extends BaseResponse
{
    public InvestmentSecuritiesETFsPayload $payload;

    public function getPayload(): InvestmentSecuritiesETFsPayload
    {
        return $this->payload;
    }
}
