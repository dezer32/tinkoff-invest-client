<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Sandbox\RemoveAccountAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\AbstractUnitTest;

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
