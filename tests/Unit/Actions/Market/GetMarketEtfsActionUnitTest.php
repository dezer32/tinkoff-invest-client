<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetETFsAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetMarketEtfsActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetMarketETFs(): void
    {
        $action = new GetETFsAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/etfs', $action->getUri());

        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
