<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAction;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\RegisterResponse;
use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountTypeEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class SandboxRegisterFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanRegisterAccount(): void
    {
        $action = new RegisterAction();

        /** @var RegisterResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue(ResponseStatusCodeEnum::OK()->equals($response->getStatus()));
        self::assertEquals(BrokerAccountTypeEnum::TINKOFF(), $response->getPayload()->getBrokerAccountType());
        self::assertIsString($response->getPayload()->getBrokerAccountId());
    }
}
