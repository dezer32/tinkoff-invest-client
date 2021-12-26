<?php

namespace Dezer\TinkoffInvestApiClient;

use Dezer\TinkoffInvestApiClient\Actions\Market\GetBondsAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetStocksAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\Bonds\InvestmentSecuritiesBondsResponse;
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
}
