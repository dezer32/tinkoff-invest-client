<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Operations;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class Operations extends BaseDataTransferObject
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
