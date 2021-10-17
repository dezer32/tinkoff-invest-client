<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Spatie\DataTransferObject\Attributes\MapFrom;

class PositionBalance extends BaseSandboxDataTransferObject
{
    #[MapFrom(0)]
    public string $figi;
    #[MapFrom(1)]
    public float $balance;

    public function getFigi(): string
    {
        return $this->figi;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
