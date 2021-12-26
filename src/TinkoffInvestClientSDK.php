<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient;

use Dezer\TinkoffInvestApiClient\Actions\Market\GetBondsAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetCurrenciesAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetETFsAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetStocksAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\Bonds\InvestmentSecuritiesBondsResponse;
use Dezer\TinkoffInvestApiClient\Dto\Market\Currencies\InvestmentSecuritiesCurrenciesResponse;
use Dezer\TinkoffInvestApiClient\Dto\Market\ETFs\InvestmentSecuritiesETFsResponse;
use Dezer\TinkoffInvestApiClient\Dto\Market\Stocks\InvestmentSecuritiesStocksResponse;

class TinkoffInvestClientSDK
{
    private TinkoffInvestApiClient $client;

    public function __construct(TinkoffInvestApiClient $client)
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
}
