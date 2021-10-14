<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCode;

class Response extends BaseDataTransferObject
{
    public string $trackingId;
    public ResponseStatusCode $status;
}