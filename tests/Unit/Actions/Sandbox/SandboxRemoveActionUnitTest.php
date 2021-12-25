<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RemoveAccountAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class SandboxRemoveActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeRemoveAction(): void
    {
        $action = new RemoveAccountAction();

        self::assertSame(HttpActionInterface::POST, $action->getMethod());
        self::assertSame('sandbox/remove', $action->getUri());
        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());
        self::assertInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
