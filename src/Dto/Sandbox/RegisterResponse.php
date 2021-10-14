<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Dto\EmptyPayload;
use Dezer\TinkoffInvestApiClient\Dto\Response;

class RegisterResponse extends Response
{
    public EmptyPayload $payload;
}