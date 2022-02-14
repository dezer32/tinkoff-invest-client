<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\Actions\Portfolio;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Portfolio\GetPortfolioCurrenciesAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\AbstractUnitTest;

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
