<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

class ErrorResponse extends Response
{
    public ErrorPayload $payload;
}