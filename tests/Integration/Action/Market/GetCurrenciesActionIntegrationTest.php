<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\Action\Market;

use Dezer\Investing\Tinkoff\ApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\AbstractIntegrationTest;

class GetCurrenciesActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetCurrencies(): void
    {
        $response = $this->sdk->getCurrencies();

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
