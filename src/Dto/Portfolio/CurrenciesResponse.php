<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Portfolio;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class CurrenciesResponse extends BaseResponse
{
    public CurrenciesPayload $payload;

    public function getPayload(): CurrenciesPayload
    {
        return $this->payload;
    }
}
