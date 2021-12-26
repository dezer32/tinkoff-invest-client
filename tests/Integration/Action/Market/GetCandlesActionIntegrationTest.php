<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Integration\Action\Market;

use DateTime;
use Dezer\TinkoffInvestApiClient\Dto\Market\CandlesCondition;
use Dezer\TinkoffInvestApiClient\Enums\IntervalEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Integration\AbstractIntegrationTest;

class GetCandlesActionIntegrationTest extends AbstractIntegrationTest
{
    /** @dataProvider canGetAllDiapasonDataProvider */
    public function testSuccessCanGetCandles(array $conditionData): void
    {
        $condition = new CandlesCondition($conditionData);
        $response = $this->sdk->getCandles($condition);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }

    public function canGetAllDiapasonDataProvider(): array
    {
        return [
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 minute'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_1()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_1()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-2 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_2()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_2()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-3 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_3()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_3()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-5 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_5()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_5()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-10 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_10()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_10()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-15 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_15()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_15()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-30 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_30()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_30()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 hour'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::HOUR()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-7 days'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::HOUR()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::DAY()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 year'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::DAY()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-7 days'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::WEEK()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-2 years'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::WEEK()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 month'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MONTH()
                ],
            ],
            [
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-10 years'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MONTH()
                ],
            ]
        ];
    }
}
