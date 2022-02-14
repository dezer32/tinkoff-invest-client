<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetOrderBookAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookCondition;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\AbstractUnitTest;

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
