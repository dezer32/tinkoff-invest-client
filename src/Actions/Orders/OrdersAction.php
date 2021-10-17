<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Orders;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Orders\OrdersResponse;
use GuzzleHttp\Psr7\Response;

class OrdersAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'orders';
    }

    public function mapResponse(Response $response): OrdersResponse
    {
        return new OrdersResponse($this->getJsonFromResponse($response));
    }
}
