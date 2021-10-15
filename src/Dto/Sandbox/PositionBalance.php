<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

class PositionBalance extends BaseSandboxDataTransferObject
{
    public string $figi;
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
