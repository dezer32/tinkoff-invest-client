<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Orders;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Ramsey\Uuid\UuidInterface;
use Spatie\DataTransferObject\Attributes\MapFrom;

class CancelCondition extends BaseDataTransferObject
{
    #[MapFrom(0)]
    public UuidInterface $orderId;

    public function getOrderId(): UuidInterface
    {
        return $this->orderId;
    }
}
