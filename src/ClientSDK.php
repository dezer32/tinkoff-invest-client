<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient;

use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetBondsAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetCandlesAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetCurrenciesAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetETFsAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetOrderBookAction;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetStocksAction;
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

    public function getStocks(): InvestmentSecuritiesStocksResponse
    {
        $action = new GetStocksAction();

        return $this->client->perform($action);
    }

    public function getBonds(): InvestmentSecuritiesBondsResponse
    {
        $action = new GetBondsAction();

        return $this->client->perform($action);
    }

    public function getETFs(): InvestmentSecuritiesETFsResponse
    {
        $action = new GetETFsAction();

        return $this->client->perform($action);
    }

    public function getCurrencies(): InvestmentSecuritiesCurrenciesResponse
    {
        $action = new GetCurrenciesAction();

        return $this->client->perform($action);
    }

    public function getOrderBook(OrderBookCondition $condition): OrderBookResponse
    {
        $action = new GetOrderBookAction($condition);

        return $this->client->perform($action);
    }

    public function getCandles(CandlesCondition $condition): CandlesResponse
    {
        $action = new GetCandlesAction($condition);

        return $this->client->perform($action);
    }
}
