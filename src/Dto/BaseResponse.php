<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Enums\ResponseStatusCodeEnum;
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
