<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseResponse;

class SearchByFIGIResponse extends BaseResponse
{
    public InstrumentByFIGI $payload;

    public function getPayload(): InstrumentByFIGI
    {
        return $this->payload;
    }
}
