<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class PortfolioResponse extends BaseResponse
{
    public PortfolioPayload $payload;

    public function getPayload(): PortfolioPayload
    {
        return $this->payload;
    }
}
