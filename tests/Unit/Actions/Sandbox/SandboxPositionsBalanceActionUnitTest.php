<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetPositionBalanceAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\PositionBalance;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class SandboxPositionsBalanceActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanSetPostionBalance(): void
    {
        $condition = new PositionBalance(self::FIGI, 100);
        $action = new SetPositionBalanceAction($condition);

        self::assertSame(HttpActionInterface::POST, $action->getMethod());
        self::assertSame('sandbox/positions/balance', $action->getUri());
        self::assertSame(
            [
                'json' => [
                    'figi' => self::FIGI,
                    'balance' => (float)100
                ]
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());

        self::assertInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
