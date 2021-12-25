<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use DateTime;
use DateTimeInterface;
use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetCandlesAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Market\CandlesCondition;
use Dezer\TinkoffInvestApiClient\Enums\IntervalEnum;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetMarketCandlesActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeGetMarketCandles(): void
    {
        $time = new DateTime();

        $condition = new CandlesCondition([
            'figi' => self::FIGI,
            'from' => $time->modify('-1 day'),
            'to' => $time,
            'interval' => IntervalEnum::MIN_1()
        ]);
        $action = new GetCandlesAction($condition);

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/candles', $action->getUri());

        self::assertSame(
            [
                'query' => [
                    'figi' => self::FIGI,
                    'from' => $time
                        ->modify('-1 day')
                        ->format(DateTimeInterface::ATOM),
                    'to' => $time
                        ->format(DateTimeInterface::ATOM),
                    'interval' => '1min'
                ]
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
