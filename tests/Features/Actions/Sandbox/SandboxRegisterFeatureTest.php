<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Sandbox;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAccountAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RemoveAccountAction;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\Register;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\RegisterResponse;
use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountTypeEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class SandboxRegisterFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanRegisterAccount(): void
    {
        $action = new RegisterAccountAction();

        /** @var RegisterResponse $response */
        $this->registeredAccount = $this->client->perform($action);

        self::assertTrue($this->registeredAccount->getStatus()->equals(ResponseStatusCodeEnum::OK()));
        self::assertTrue(
            $this->registeredAccount->getPayload()->getBrokerAccountType()->equals(BrokerAccountTypeEnum::TINKOFF())
        );
        self::assertIsString($this->registeredAccount->getPayload()->getBrokerAccountId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->client->perform(new RemoveAccountAction());
    }
}
