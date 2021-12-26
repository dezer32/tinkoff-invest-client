<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetCurrencyBalanceAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\CurrencyBalance;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class SandboxCurrenciesBalanceActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanSetBalance(): void
    {
        $condition = new CurrencyBalance(CurrencyEnum::RUB(), 100);
        $action = new SetCurrencyBalanceAction($condition);

        self::assertSame(HttpActionInterface::POST, $action->getMethod());
        self::assertSame('sandbox/currencies/balance', $action->getUri());
        self::assertSame(
            [
                'json' => [
                    'currency' => 'RUB',
                    'balance' => 100
                ]
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());
        self::assertInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
