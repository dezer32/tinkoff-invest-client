<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\InvestmentSecuritiesResponse;
use GuzzleHttp\Psr7\Response;

class GetETFsAction extends AbstractBaseHttpAction
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/etfs';
    }

    public function mapResponse(Response $response): InvestmentSecuritiesResponse
    {
        return new InvestmentSecuritiesResponse($this->getJsonFromResponse($response));
    }
}
