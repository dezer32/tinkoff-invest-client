<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use DateTime;
use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\GetOperationsAction;
use Dezer\TinkoffInvestApiClient\Actions\GetPortfolioAction;
use Dezer\TinkoffInvestApiClient\Actions\GetPortfolioCurrenciesAction;
use Dezer\TinkoffInvestApiClient\Actions\GetUserAccountsAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetBondsAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetCandlesAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetCurrenciesAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetETFsAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetOrderBookAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\GetStocksAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\SearchByFIGIAction;
use Dezer\TinkoffInvestApiClient\Actions\Market\SearchByTickerAction;
use Dezer\TinkoffInvestApiClient\Actions\Orders\CancelOrderAction;
use Dezer\TinkoffInvestApiClient\Actions\Orders\CreateLimitOrderAction;
use Dezer\TinkoffInvestApiClient\Actions\Orders\GetOrdersAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\ClearPositionsAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAccountAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RemoveAccountAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetCurrencyBalanceAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetPositionBalanceAction;
use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;
use Dezer\TinkoffInvestApiClient\Dto\Market\CandlesCondition;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsCondition;
use Dezer\TinkoffInvestApiClient\Enums\IntervalEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class ActionsUnionFeatureTest extends AbstractFeatureTest
{
    private const FIGI = 'BBG000B9XRY4';

    /** @dataProvider actionDataProvider */
    public function testSuccessPerformAction(
        string $actionClass,
        ?string $conditionClass = null,
        array $conditionData = []
    ): void {
        $this->markTestIncomplete('Необходимо завершить написание тестов.');

        $condition = null;

        if ($conditionClass !== null) {
            $condition = new $conditionClass($conditionData);
        }

        /** @var HttpActionInterface $action */
        $action = new $actionClass($condition);

        /** @var BaseResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }

    public function actionDataProvider(): array
    {
        return [
            [
                GetUserAccountsAction::class,
            ],
            [
                GetPortfolioAction::class,
            ],
            [
                GetPortfolioCurrenciesAction::class,
            ],
            [
                GetStocksAction::class,
            ],
            [
                GetBondsAction::class,
            ],
            [
                GetETFsAction::class,
            ],
            [
                GetCurrenciesAction::class,
            ],
            // Добавить гуард в экшн для проверки условия.
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 minute'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_1()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_1()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-2 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_2()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_2()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-3 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_3()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_3()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-5 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_5()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_5()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-10 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_10()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_10()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-15 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_15()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_15()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-30 minutes'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_30()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MIN_30()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 hour'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::HOUR()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-7 days'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::HOUR()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 day'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::DAY()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 year'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::DAY()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-7 days'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::WEEK()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-2 years'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::WEEK()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-1 month'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MONTH()
                ],
            ],
            [
                GetCandlesAction::class,
                CandlesCondition::class,
                [
                    'figi' => self::FIGI,
                    'from' => (new DateTime())->modify('-10 years'),
                    'to' => new DateTime(),
                    'interval' => IntervalEnum::MONTH()
                ],
            ],
            [
                GetOrderBookAction::class,
            ],
            [
                SearchByFIGIAction::class,
            ],
            [
                SearchByTickerAction::class,
            ],
            [
                ClearPositionsAction::class,
            ],
            [
                RegisterAccountAction::class,
            ],
            [
                RemoveAccountAction::class,
            ],
            [
                SetCurrencyBalanceAction::class,
            ],
            [
                SetPositionBalanceAction::class,
            ],
            [
                CancelOrderAction::class,
            ],
            [
                CreateLimitOrderAction::class,
            ],
            [
                GetOrdersAction::class,
            ],
            [
                GetOperationsAction::class,
                OperationsCondition::class,
                [
                    'from' => (new DateTime())->modify('-1 month'),
                    'to' => new DateTime(),
                ]
            ],
            [
                GetOperationsAction::class,
                OperationsCondition::class,
                [
                    'from' => (new DateTime())->modify('-1 month'),
                    'to' => new DateTime(),
                    'figi' => self::FIGI
                ]
            ],
        ];
    }
}
