<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetStocksAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetMarketStocksActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetMarketStocks(): void
    {
        $action = new GetStocksAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/stocks', $action->getUri());

        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
