<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Portfolio;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Portfolio\GetPortfolioCurrenciesAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetPortfolioCurrenciesActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetPortfolio(): void
    {
        $action = new GetPortfolioCurrenciesAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('portfolio/currencies', $action->getUri());

        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());

        self::assertInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
