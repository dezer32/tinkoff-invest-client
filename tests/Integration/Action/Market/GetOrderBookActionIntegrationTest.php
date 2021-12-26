<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Integration\Action\Market;

use Dezer\TinkoffInvestApiClient\Dto\Market\OrderBookCondition;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Integration\AbstractIntegrationTest;

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
