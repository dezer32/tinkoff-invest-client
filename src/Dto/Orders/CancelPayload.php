<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;

class CancelPayload extends BaseDataTransferObject
{
    public string $orderId;

    public function getOrderId(): string
    {
        return $this->orderId;
    }
}
