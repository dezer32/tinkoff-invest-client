<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Operations;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class OperationsPayload extends BaseDataTransferObject
{
    /** @var Operation[] */
    #[CastWith(ArrayCaster::class, itemType: Operation::class)]
    public array $operations;

    /** @return Operation[] */
    public function getOperations(): array
    {
        return $this->operations;
    }
}
