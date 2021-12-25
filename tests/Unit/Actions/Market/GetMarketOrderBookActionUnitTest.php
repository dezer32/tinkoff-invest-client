<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetOrderBookAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Market\OrderBookCondition;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetMarketOrderBookActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetMarketOrderBook(): void
    {
        $condition = new OrderBookCondition([
            'figi' => self::FIGI,
            'depth' => 1
        ]);
        $action = new GetOrderBookAction($condition);

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/orderbook', $action->getUri());

        self::assertSame(
            [
                'query' => [
                    'figi' => self::FIGI,
                    'depth' => 1
                ]
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
