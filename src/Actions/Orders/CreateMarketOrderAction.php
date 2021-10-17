<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Orders;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreatedOrderResponse;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreateMarketOrderCondition;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class CreateMarketOrderAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    private CreateMarketOrderCondition $createMarketOrderCondition;

    public function __construct(CreateMarketOrderCondition $createMarketOrderCondition)
    {
        $this->createMarketOrderCondition = $createMarketOrderCondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::POST;
    }

    public function getUri(): string
    {
        return 'orders/market-order';
    }

    public function getOptions(): array
    {
        $queryKeys = ['figi'];

        return [
            RequestOptions::QUERY => $this->createMarketOrderCondition
                ->only(...$queryKeys)
                ->toArray(),
            RequestOptions::JSON => $this->createMarketOrderCondition
                ->except(...$queryKeys)
                ->toArray(),
        ];
    }

    public function mapResponse(Response $response): CreatedOrderResponse
    {
        return new CreatedOrderResponse($this->getJsonFromResponse($response));
    }
}
