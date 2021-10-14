<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

class ErrorPayload extends BaseDataTransferObject
{
    public string $message;
    public string $code;

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
