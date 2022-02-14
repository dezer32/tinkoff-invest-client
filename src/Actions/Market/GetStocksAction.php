<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Stocks\InvestmentSecuritiesStocksResponse;
use GuzzleHttp\Psr7\Response;

class GetStocksAction extends AbstractBaseHttpAction
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/stocks';
    }

    public function mapResponse(Response $response): InvestmentSecuritiesStocksResponse
    {
        return new InvestmentSecuritiesStocksResponse($this->getJsonFromResponse($response));
    }
}
