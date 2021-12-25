<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\GetUserAccountsAction;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetUserAccountsActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetUserAccountsAction(): void
    {
        $action = new GetUserAccountsAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('user/accounts', $action->getUri());
        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());
    }
}
