<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\InvestmentSecuritiesResponse;
use Dezer\TinkoffInvestApiClient\Dto\Market\SearchByTickerCondition;
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
