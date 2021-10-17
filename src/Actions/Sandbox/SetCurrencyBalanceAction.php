<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\BaseHttpClient\Exceptions\ResponseException;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\CurrencyBalance;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class SetCurrencyBalanceAction extends AbstractBaseHttpAction implements BrokerAccountIdCompatible
{
    private CurrencyBalance $currencyBalance;

    public function __construct(CurrencyBalance $currencyBalance)
    {
        $this->currencyBalance = $currencyBalance;
    }

    public function getMethod(): string
    {
        return HttpActionInterface::POST;
    }

    public function getUri(): string
    {
        return 'sandbox/currencies/balance';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::JSON => $this->currencyBalance->toArray(),
        ];
    }

    /**
     * @throws UnknownProperties
     * @throws ResponseException
     */
    public function mapResponse(Response $response): EmptyResponse
    {
        return new EmptyResponse($this->getJsonFromResponse($response));
    }
}
