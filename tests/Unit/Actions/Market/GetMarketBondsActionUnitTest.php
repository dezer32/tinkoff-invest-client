<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetBondsAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetMarketBondsActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetMarketBonds(): void
    {
        $action = new GetBondsAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/bonds', $action->getUri());

        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
