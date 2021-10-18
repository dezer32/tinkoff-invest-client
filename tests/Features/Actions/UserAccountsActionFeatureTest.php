<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Dezer\TinkoffInvestApiClient\Actions\GetUserAccountsAction;
use Dezer\TinkoffInvestApiClient\Dto\User\AccountsResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class UserAccountsActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanGetUserActions(): void
    {
        $action = new GetUserAccountsAction();

        /** @var AccountsResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
