<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto;

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
