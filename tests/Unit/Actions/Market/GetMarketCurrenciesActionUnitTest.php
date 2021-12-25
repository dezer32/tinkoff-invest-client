<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetCurrenciesAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetMarketCurrenciesActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetMarketCurrencies(): void
    {
        $action = new GetCurrenciesAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/currencies', $action->getUri());

        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
