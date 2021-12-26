<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\Bonds\InvestmentSecuritiesBondsResponse;
use GuzzleHttp\Psr7\Response;

class GetBondsAction extends AbstractBaseHttpAction
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/bonds';
    }

    public function mapResponse(Response $response): InvestmentSecuritiesBondsResponse
    {
        return new InvestmentSecuritiesBondsResponse($this->getJsonFromResponse($response));
    }
}
