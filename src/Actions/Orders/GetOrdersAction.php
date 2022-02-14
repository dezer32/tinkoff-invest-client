<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Orders;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Orders\OrdersResponse;
use GuzzleHttp\Psr7\Response;

class GetOrdersAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
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
