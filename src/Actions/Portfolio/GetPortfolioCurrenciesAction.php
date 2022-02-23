<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Portfolio;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Portfolio\CurrenciesResponse;
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
