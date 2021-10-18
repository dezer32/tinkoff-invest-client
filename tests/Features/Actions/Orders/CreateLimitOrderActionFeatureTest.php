<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Orders;

use Dezer\TinkoffInvestApiClient\Actions\Orders\CreateLimitOrderAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\ClearPositionsAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetCurrencyBalanceAction;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreatedOrderResponse;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreateLimitOrderCondition;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\CurrencyBalance;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Dezer\TinkoffInvestApiClient\Enums\OperationTypeEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class CreateLimitOrderActionFeatureTest extends AbstractFeatureTest
{
    /** @dataProvider limitOrderDataProvider */
    public function testSuccessCanCreateLimitOrder(array $limitOrderCondition): void
    {
        $condition = new CreateLimitOrderCondition($limitOrderCondition);
        $action = new CreateLimitOrderAction($condition);

        /** @var CreatedOrderResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }

    public function limitOrderDataProvider(): array
    {
        return [
            [
                [
                    'figi' => 'BBG000B9XRY4',
                    'lots' => 1,
                    'operation' => OperationTypeEnum::BUY(),
                    'price' => 1
                ]
            ]
        ];
    }

    protected function tearDown(): void
    {
        $clearAction = new ClearPositionsAction();
        $this->client->perform($clearAction);
        parent::tearDown();
    }

    protected function setUp(): void
    {
        parent::setUp();

        $balance = new CurrencyBalance(CurrencyEnum::USD(), 1000);
        $balanceAction = new SetCurrencyBalanceAction($balance);
        $this->client->perform($balanceAction);
    }
}
