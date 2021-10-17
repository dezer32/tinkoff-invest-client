<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Sandbox;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\ClearAction;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class SandboxClearActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanClear(): void
    {
        $action = new ClearAction();

        /** @var EmptyResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
        self::assertEmpty($response->getPayload());
    }
}
