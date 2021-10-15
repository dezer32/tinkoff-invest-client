<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class BaseResponse extends BaseDataTransferObject
{
    public string $trackingId;
    #[CastWith(EnumCaster::class)]
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
