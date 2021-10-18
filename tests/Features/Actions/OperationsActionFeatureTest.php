<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Carbon\Carbon;
use Dezer\TinkoffInvestApiClient\Actions\GetOperationsAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAccountAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RemoveAccountAction;
use Dezer\TinkoffInvestApiClient\Actions\GetUserAccountsAction;
use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsCondition;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsResponse;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\RegisterResponse;
use Dezer\TinkoffInvestApiClient\Dto\User\AccountsResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class OperationsActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanGetOperations(): void
    {
        $operationCondition = new OperationsCondition([
            Carbon::now()->modify('-1 year'),
            Carbon::now()->modify('-6 months'),

        ]);

        $action = new GetOperationsAction($operationCondition);

        /** @var OperationsResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
