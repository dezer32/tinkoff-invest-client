<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Carbon\Carbon;
use Dezer\TinkoffInvestApiClient\Actions\OperationsAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RemoveAction;
use Dezer\TinkoffInvestApiClient\Actions\UserAccountsAction;
use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsCondition;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsResponse;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\RegisterResponse;
use Dezer\TinkoffInvestApiClient\Dto\User\AccountsResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class OperationsActionFeatureTest extends AbstractFeatureTest
{
    private ?RegisterResponse $registeredAccount = null;

    public function testSuccessCanGetOperations(): void
    {
        $operationCondition = new OperationsCondition([
            Carbon::now()->modify('-1 year'),
            Carbon::now()->modify('-6 months'),

        ]);

        $action = new OperationsAction($operationCondition);

        /** @var OperationsResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }

    protected function setUp(): void
    {
        parent::setUp();

        $accountsAction = new UserAccountsAction();
        /** @var AccountsResponse $accounts */
        $accounts = $this->client->perform($accountsAction);
        if (!empty($accounts->getPayload()->getAccounts())) {
            $this->client->setBrokerAccountId(
                new BrokerAccountId($accounts->getPayload()->getAccounts()[0]->getBrokerAccountId())
            );
        } else {
            $registerAction = new RegisterAction();
            $this->registeredAccount = $this->client->perform($registerAction);
            $this->client->setBrokerAccountId(
                new BrokerAccountId($this->registeredAccount->getPayload()->getBrokerAccountId())
            );
        }
    }

    protected function tearDown(): void
    {
        if ($this->registeredAccount !== null) {
            $this->client->perform(new RemoveAction());
        }

        parent::tearDown();
    }
}
