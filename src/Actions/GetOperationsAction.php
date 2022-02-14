<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Operations\OperationsCondition;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Operations\OperationsResponse;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class GetOperationsAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    private OperationsCondition $operationsCondition;

    public function __construct(OperationsCondition $operationsCondition)
    {
        $this->operationsCondition = $operationsCondition;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'operations';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->operationsCondition->toArray(),
        ];
    }

    public function mapResponse(Response $response): OperationsResponse
    {
        return new OperationsResponse($this->getJsonFromResponse($response));
    }
}
