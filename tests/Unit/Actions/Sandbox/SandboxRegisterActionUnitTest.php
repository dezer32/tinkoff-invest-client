<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAccountAction;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\Register;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class SandboxRegisterActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeActionWithoutCondition(): void
    {
        $action = new RegisterAccountAction();

        self::assertSame(HttpActionInterface::POST, $action->getMethod());
        self::assertSame('sandbox/register', $action->getUri());
        self::assertSame(
            [
                'json' => null
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());
    }

    public function testSuccessCanMakeActionWithCondition(): void
    {
        $condition = new Register('Tinkoff');
        $action = new RegisterAccountAction($condition);

        self::assertSame(HttpActionInterface::POST, $action->getMethod());
        self::assertSame('sandbox/register', $action->getUri());
        self::assertSame(
            [
                'json' => [
                    'brokerAccountType' => 'Tinkoff'
                ]
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());
    }
}
