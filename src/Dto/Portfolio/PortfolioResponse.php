<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Portfolio;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class PortfolioResponse extends BaseResponse
{
    public PortfolioPayload $payload;

    public function getPayload(): PortfolioPayload
    {
        return $this->payload;
    }
}
