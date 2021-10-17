<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use GuzzleHttp\Psr7\Response;

class ClearPositionsAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    public function getMethod(): string
    {
        return HttpActionInterface::POST;
    }

    public function getUri(): string
    {
        return 'sandbox/clear';
    }

    public function mapResponse(Response $response): EmptyResponse
    {
        return new EmptyResponse($this->getJsonFromResponse($response));
    }
}
