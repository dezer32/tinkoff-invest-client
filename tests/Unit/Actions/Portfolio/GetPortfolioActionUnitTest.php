<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Portfolio;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\GetPortfolioAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetPortfolioActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetPortfolio(): void
    {
        $action = new GetPortfolioAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('portfolio', $action->getUri());

        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());

        self::assertInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
