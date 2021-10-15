<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class OrdersPayload extends BaseDataTransferObject
{
    /** @var Order[] */
    #[CastWith(ArrayCaster::class, itemType: Order::class)]
    public array $orders;

    /** @return Order[] */
    public function getOrders(): array
    {
        return $this->orders;
    }
}
