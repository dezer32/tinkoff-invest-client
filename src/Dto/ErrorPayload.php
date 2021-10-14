<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

class ErrorPayload extends BaseDataTransferObject
{
    public string $message;
    public string $code;
}