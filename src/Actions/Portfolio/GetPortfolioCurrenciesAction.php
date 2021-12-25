<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Portfolio;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Portfolio\CurrenciesResponse;
use GuzzleHttp\Psr7\Response;

class GetPortfolioCurrenciesAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'portfolio/currencies';
    }

    public function mapResponse(Response $response): CurrenciesResponse
    {
        return new CurrenciesResponse($this->getJsonFromResponse($response));
    }
}
