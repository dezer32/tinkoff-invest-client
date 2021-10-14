<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;

class BaseResponse extends BaseDataTransferObject
{
    public string $trackingId;
    public ResponseStatusCodeEnum $status;

    public function getTrackingId(): string
    {
        return $this->trackingId;
    }

    public function getStatus(): ResponseStatusCodeEnum
    {
        return $this->status;
    }
}
