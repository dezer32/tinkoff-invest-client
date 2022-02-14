<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Orders;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
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
