<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\Action\Market;

use Dezer\Investing\Tinkoff\ApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\AbstractIntegrationTest;

class GetStocksActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetStocks(): void
    {
        $response = $this->sdk->getStocks();

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
