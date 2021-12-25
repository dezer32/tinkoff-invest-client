<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\ClearPositionsAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class SandboxClearActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeClearAction(): void
    {
        $action = new ClearPositionsAction();

        self::assertSame(HttpActionInterface::POST, $action->getMethod());
        self::assertSame('sandbox/clear', $action->getUri());
        self::assertEmpty($action->getOptions());
        self::assertEmpty($action->getExtraOptions());
        self::assertInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
