<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\OrderBookCondition;
use Dezer\TinkoffInvestApiClient\Dto\Market\OrderBookResponse;
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
