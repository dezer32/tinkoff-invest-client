<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookCondition;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookResponse;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class GetOrderBookAction extends AbstractBaseHttpAction
{
    private OrderBookCondition $orderBookCondition;

    public function __construct(OrderBookCondition $orderBookCondition)
    {
        $this->orderBookCondition = $orderBookCondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'market/orderbook';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->orderBookCondition->toArray(),
        ];
    }

    public function mapResponse(Response $response): OrderBookResponse
    {
        return new OrderBookResponse($this->getJsonFromResponse($response));
    }
}
