<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Orders;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreatedOrderResponse;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreateLimitOrderCondition;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class CreateLimitOrderAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    private CreateLimitOrderCondition $createLimitOrderCondition;

    public function __construct(CreateLimitOrderCondition $createLimitOrderCondition)
    {
        $this->createLimitOrderCondition = $createLimitOrderCondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::POST;
    }

    public function getUri(): string
    {
        return 'orders/limit-order';
    }

    public function getOptions(): array
    {
        $queryKeys = ['figi'];

        return [
            RequestOptions::QUERY => $this->createLimitOrderCondition
                ->only(...$queryKeys)
                ->toArray(),
            RequestOptions::JSON => $this->createLimitOrderCondition
                ->except(...$queryKeys)
                ->toArray(),
        ];
    }

    public function mapResponse(Response $response): CreatedOrderResponse
    {
        return new CreatedOrderResponse($this->getJsonFromResponse($response));
    }
}
