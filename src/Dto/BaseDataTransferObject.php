<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto;

use DateTimeInterface;
use Dezer\Investing\Tinkoff\ApiClient\Casters\DateTimeInterfaceCaster;
use Dezer\Investing\Tinkoff\ApiClient\Casters\UuidCaster;
use MyCLabs\Enum\Enum;
use Ramsey\Uuid\UuidInterface;
use Spatie\DataTransferObject\Attributes\DefaultCast;
use Spatie\DataTransferObject\DataTransferObject;

#[DefaultCast(UuidInterface::class, UuidCaster::class)]
#[DefaultCast(DateTimeInterface::class, DateTimeInterfaceCaster::class)]
abstract class BaseDataTransferObject extends DataTransferObject
{
    public function toArray(): array
    {
        $array = parent::toArray();

        array_walk_recursive($array, static function (mixed &$item): mixed {
            if (is_subclass_of($item, DateTimeInterface::class)) {
                $item = $item->format(DateTimeInterface::ATOM);
            }

            if (is_subclass_of($item, Enum::class)) {
                $item = $item->getValue();
            }

            if (is_subclass_of($item, UuidInterface::class)) {
                $item = $item->toString();
            }

            return $item;
        });

        return $array;
    }
}
