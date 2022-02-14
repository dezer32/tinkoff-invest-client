<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Bonds\InvestmentSecuritiesBondsResponse;
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
