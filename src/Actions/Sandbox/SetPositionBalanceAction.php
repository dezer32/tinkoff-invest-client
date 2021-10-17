<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\PositionBalance;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;

class SetPositionBalanceAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    private PositionBalance $positionBalance;

    public function __construct(PositionBalance $positionBalance)
    {
        $this->positionBalance = $positionBalance;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::POST;
    }

    public function getUri(): string
    {
        return 'sandbox/positions/balance';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::JSON => $this->positionBalance->toArray(),
        ];
    }

    public function mapResponse(Response $response): EmptyResponse
    {
        return new EmptyResponse($this->getJsonFromResponse($response));
    }
}
