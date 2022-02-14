<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Orders;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\EmptyResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Orders\CancelCondition;
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
