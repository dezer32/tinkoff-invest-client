<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

class PositionBalance extends BaseSandboxDataTransferObject
{
    public string $figi;
    public float $balance;
}