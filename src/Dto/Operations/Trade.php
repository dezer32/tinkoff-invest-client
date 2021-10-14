<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Operations;

use DateTimeInterface;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;

class Trade extends BaseDataTransferObject
{
    public string $tradeId;
    public DateTimeInterface $date;
    public float $price;
    public int $quantity;

    public function getTradeId(): string
    {
        return $this->tradeId;
    }

    public function getDate(): DateTimeInterface
    {
        return $this->date;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
