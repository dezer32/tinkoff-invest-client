<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Integration\Action\Market;

use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Integration\AbstractIntegrationTest;

class GetCurrenciesActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetCurrencies(): void
    {
        $response = $this->sdk->getCurrencies();

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
