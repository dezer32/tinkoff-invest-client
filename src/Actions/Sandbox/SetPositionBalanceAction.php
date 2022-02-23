<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\EmptyResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Sandbox\PositionBalance;
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
