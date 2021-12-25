<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market;

use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;

class SearchByFIGIResponse extends BaseResponse
{
    public InstrumentByFIGI $payload;

    public function getPayload(): InstrumentByFIGI
    {
        return $this->payload;
    }
}
