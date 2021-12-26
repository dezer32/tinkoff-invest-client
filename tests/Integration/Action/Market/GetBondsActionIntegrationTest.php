<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Integration\Action\Market;

use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Integration\AbstractIntegrationTest;

class GetBondsActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetBonds(): void
    {
        $response = $this->sdk->getBonds();

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
