<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Orders;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CancelCondition;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class CancelOrderAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    private CancelCondition $cancelCondition;

    public function __construct(CancelCondition $cancelCondition)
    {
        $this->cancelCondition = $cancelCondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::POST;
    }

    public function getUri(): string
    {
        return 'orders/cancel';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->cancelCondition->toArray(),
        ];
    }

    public function mapResponse(Response $response): EmptyResponse
    {
        return new EmptyResponse($this->getJsonFromResponse($response));
    }
}
