<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Integration\Action\Market;

use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Integration\AbstractIntegrationTest;

class GetETFsActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetETFs(): void
    {
        $response = $this->sdk->getETFs();

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
