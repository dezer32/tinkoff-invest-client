<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\CandlesCondition;
use Dezer\TinkoffInvestApiClient\Dto\Market\CandlesResponse;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class GetCandlesAction extends AbstractBaseHttpAction
{
    private CandlesCondition $candlesCondition;

    public function __construct(CandlesCondition $candlesCondition)
    {
        $this->candlesCondition = $candlesCondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/bonds';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->candlesCondition->toArray(),
        ];
    }

    public function mapResponse(Response $response): CandlesResponse
    {
        return new CandlesResponse($this->getJsonFromResponse($response));
    }
}
