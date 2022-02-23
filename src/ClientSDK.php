<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient;

use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetBondsAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetCandlesAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetCurrenciesAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetETFsAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetOrderBookAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetStocksAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\ErrorResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Bonds\InvestmentSecuritiesBondsResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\CandlesCondition;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\CandlesResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Currencies\InvestmentSecuritiesCurrenciesResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\ETFs\InvestmentSecuritiesETFsResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookCondition;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Stocks\InvestmentSecuritiesStocksResponse;

class ClientSDK implements ClientSDKInterface
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getStocks(): InvestmentSecuritiesStocksResponse|ErrorResponse
    {
        $action = new GetStocksAction();

        return $this->client->perform($action);
    }

    public function getBonds(): InvestmentSecuritiesBondsResponse|ErrorResponse
    {
        $action = new GetBondsAction();

        return $this->client->perform($action);
    }

    public function getETFs(): InvestmentSecuritiesETFsResponse|ErrorResponse
    {
        $action = new GetETFsAction();

        return $this->client->perform($action);
    }

    public function getCurrencies(): InvestmentSecuritiesCurrenciesResponse|ErrorResponse
    {
        $action = new GetCurrenciesAction();

        return $this->client->perform($action);
    }

    public function getOrderBook(OrderBookCondition $condition): OrderBookResponse|ErrorResponse
    {
        $action = new GetOrderBookAction($condition);

        return $this->client->perform($action);
    }

    public function getCandles(CandlesCondition $condition): CandlesResponse|ErrorResponse
    {
        $action = new GetCandlesAction($condition);

        return $this->client->perform($action);
    }
}
