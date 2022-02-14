<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetETFsAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\AbstractUnitTest;

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
