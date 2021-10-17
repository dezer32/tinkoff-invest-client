<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

use MyCLabs\Enum\Enum;
use Spatie\DataTransferObject\DataTransferObject;

abstract class BaseDataTransferObject extends DataTransferObject
{
    public function toArray(): array
    {
        $array = parent::toArray();

        array_walk_recursive($array, static function (mixed &$item): mixed {
            if (is_subclass_of($item, \DateTimeInterface::class)) {
                $item = $item->format(\DateTimeInterface::ATOM);
            }

            if (is_subclass_of($item, Enum::class)) {
                $item = $item->getValue();
            }

            return $item;
        });

        return $array;
    }
}
