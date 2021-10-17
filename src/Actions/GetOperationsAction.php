<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsCondition;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsResponse;
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
