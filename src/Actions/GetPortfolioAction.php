<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Portfolio\PortfolioResponse;
use GuzzleHttp\Psr7\Response;

class GetPortfolioAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'portfolio';
    }

    public function mapResponse(Response $response): PortfolioResponse
    {
        return new PortfolioResponse($this->getJsonFromResponse($response));
    }
}
