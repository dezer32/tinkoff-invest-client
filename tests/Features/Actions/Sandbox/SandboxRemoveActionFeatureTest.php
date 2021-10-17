<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Sandbox;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RemoveAction;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class SandboxRemoveActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanRemove(): void
    {
        $action = new RegisterAction();
        $this->client->perform($action);

        $action = new RemoveAction();

        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
        self::assertEmpty($response->getPayload());
    }
}
