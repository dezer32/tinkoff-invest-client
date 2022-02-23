<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\Action\Market;

use Dezer\Investing\Tinkoff\ApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Integration\AbstractIntegrationTest;

class GetETFsActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetETFs(): void
    {
        $response = $this->sdk->getETFs();

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
