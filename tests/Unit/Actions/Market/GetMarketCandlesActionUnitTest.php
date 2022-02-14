<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\Actions\Market;

use DateTime;
use DateTimeInterface;
use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\GetCandlesAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\CandlesCondition;
use Dezer\Investing\Tinkoff\ApiClient\Enums\IntervalEnum;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\AbstractUnitTest;

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
