<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\SearchByFIGICondition;
use Dezer\TinkoffInvestApiClient\Dto\Market\SearchByFIGIResponse;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class SearchByFIGIAction extends AbstractBaseHttpAction
{
    private SearchByFIGICondition $searchByFIGICondition;

    public function __construct(SearchByFIGICondition $searchByFIGICondition)
    {
        $this->searchByFIGICondition = $searchByFIGICondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/search/by-figi';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->searchByFIGICondition->toArray(),
        ];
    }

    public function mapResponse(Response $response): SearchByFIGIResponse
    {
        return new SearchByFIGIResponse($this->getJsonFromResponse($response));
    }
}
