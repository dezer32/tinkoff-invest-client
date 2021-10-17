<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RemoveAction;
use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\RegisterResponse;
use Dezer\TinkoffInvestApiClient\Enums\BrokerAccountTypeEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class SandboxRegisterFeatureTest extends AbstractFeatureTest
{
    private RegisterResponse $response;

    public function testSuccessCanRegisterAccount(): void
    {
        $action = new RegisterAction();

        /** @var RegisterResponse $response */
        $this->response = $this->client->perform($action);

        self::assertTrue($this->response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
        self::assertTrue(
            $this->response->getPayload()->getBrokerAccountType()->equals(BrokerAccountTypeEnum::TINKOFF())
        );
        self::assertIsString($this->response->getPayload()->getBrokerAccountId());
    }

    protected function tearDown(): void
    {
        $brokerAccountId = new BrokerAccountId([$this->response->getPayload()->getBrokerAccountId()]);

        $this->client->setBrokerAccountId($brokerAccountId);
        $this->client->perform(new RemoveAction());

        parent::tearDown();
    }
}
