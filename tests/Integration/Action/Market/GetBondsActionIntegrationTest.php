<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\Action\Market;

use Dezer\Investing\Tinkoff\ApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\AbstractIntegrationTest;

class GetBondsActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetBonds(): void
    {
        $response = $this->sdk->getBonds();

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
