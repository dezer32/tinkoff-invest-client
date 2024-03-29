<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient;

use Dezer\BaseHttpClient\Exceptions\ClientException;
use Dezer\BaseHttpClient\Exceptions\RequestException;
use Dezer\Investing\Tinkoff\ApiClient\Dto\ErrorResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Bonds\InvestmentSecuritiesBondsResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\CandlesCondition;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\CandlesResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Currencies\InvestmentSecuritiesCurrenciesResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\ETFs\InvestmentSecuritiesETFsResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookCondition;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookResponse;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Stocks\InvestmentSecuritiesStocksResponse;

interface ClientSDKInterface
{
    /**
     * @throws ClientException
     * @throws RequestException
     */
    public function getStocks(): InvestmentSecuritiesStocksResponse|ErrorResponse;

    /**
     * @throws ClientException
     * @throws RequestException
     */
    public function getBonds(): InvestmentSecuritiesBondsResponse|ErrorResponse;

    /**
     * @throws ClientException
     * @throws RequestException
     */
    public function getETFs(): InvestmentSecuritiesETFsResponse|ErrorResponse;

    /**
     * @throws ClientException
     * @throws RequestException
     */
    public function getCurrencies(): InvestmentSecuritiesCurrenciesResponse|ErrorResponse;

    /**
     * @throws ClientException
     * @throws RequestException
     */
    public function getOrderBook(OrderBookCondition $condition): OrderBookResponse|ErrorResponse;

    /**
     * @throws ClientException
     * @throws RequestException
     */
    public function getCandles(CandlesCondition $condition): CandlesResponse|ErrorResponse;
}
