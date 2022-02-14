<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\Action\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\OrderBookCondition;
use Dezer\Investing\Tinkoff\ApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\AbstractIntegrationTest;

class GetOrderBookActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetOrderBook(): void
    {
        $condition = new OrderBookCondition([
            'figi' => self::FIGI,
            'depth' => 5
        ]);

        $response = $this->sdk->getOrderBook($condition);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
