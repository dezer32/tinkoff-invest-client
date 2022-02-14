<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\Actions;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\Actions\GetUserAccountsAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\AbstractUnitTest;

class GetUserAccountsActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetUserAccountsAction(): void
    {
        $action = new GetUserAccountsAction();

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('user/accounts', $action->getUri());
        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
