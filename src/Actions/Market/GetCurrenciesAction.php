<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Currencies\InvestmentSecuritiesCurrenciesResponse;
use GuzzleHttp\Psr7\Response;

class GetCurrenciesAction extends AbstractBaseHttpAction
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/currencies';
    }

    public function mapResponse(Response $response): InvestmentSecuritiesCurrenciesResponse
    {
        return new InvestmentSecuritiesCurrenciesResponse($this->getJsonFromResponse($response));
    }
}
