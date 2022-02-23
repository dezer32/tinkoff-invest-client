<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\SearchByFIGICondition;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\SearchByFIGIResponse;
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
