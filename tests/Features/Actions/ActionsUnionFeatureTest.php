<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\GetOperationsAction;
use Dezer\TinkoffInvestApiClient\Dto\BaseResponse;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsCondition;
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
//            [
//                GetUserAccountsAction::class,
//            ],
//            [
//                GetPortfolioAction::class,
//            ],
//            [
//                GetPortfolioCurrenciesAction::class,
//            ],
//            [
//                GetOperationsAction::class,
//                OperationsCondition::class,
//                [
//                    'from' => (new \DateTime())->modify('-1 month'),
//                    'to' => new \DateTime(),
//                ]
//            ],
//            [
//                GetOperationsAction::class,
//                OperationsCondition::class,
//                [
//                    'from' => (new \DateTime())->modify('-1 month'),
//                    'to' => new \DateTime(),
//                    'figi' => self::FIGI
//                ]
//            ],
        ];
    }
}