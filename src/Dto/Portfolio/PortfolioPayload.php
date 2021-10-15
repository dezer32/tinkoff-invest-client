<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class PortfolioPayload extends BaseDataTransferObject
{
    /** @var Position[] */
    #[CastWith(ArrayCaster::class, itemType: Position::class)]
    public array $positions;
}
