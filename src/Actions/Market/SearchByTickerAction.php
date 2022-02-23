<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\InvestmentSecuritiesResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\SearchByTickerCondition;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class SearchByTickerAction extends AbstractBaseHttpAction
{
    private SearchByTickerCondition $searchByTickerCondition;

    public function __construct(SearchByTickerCondition $searchByTickerCondition)
    {
        $this->searchByTickerCondition = $searchByTickerCondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/search/by-ticker';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->searchByTickerCondition->toArray(),
        ];
    }

    public function mapResponse(Response $response): InvestmentSecuritiesResponse
    {
        return new InvestmentSecuritiesResponse($this->getJsonFromResponse($response));
    }
}
