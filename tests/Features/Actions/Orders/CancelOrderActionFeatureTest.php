<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Orders;

use Dezer\TinkoffInvestApiClient\Actions\Orders\CancelOrderAction;
use Dezer\TinkoffInvestApiClient\Actions\Orders\CreateLimitOrderAction;
use Dezer\TinkoffInvestApiClient\Actions\Orders\CreateMarketOrderAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\ClearPositionsAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetCurrencyBalanceAction;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CancelCondition;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreatedOrderResponse;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreateLimitOrderCondition;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreateMarketOrderCondition;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\CurrencyBalance;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Dezer\TinkoffInvestApiClient\Enums\OperationTypeEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class CancelOrderActionFeatureTest extends AbstractFeatureTest
{
    /** @dataProvider orderDataProvider */
    public function testSuccessCanCancelMarketOrder(array $conditionData): void
    {
        $orderCondition = new CreateMarketOrderCondition($conditionData);
        $orderAction = new CreateMarketOrderAction($orderCondition);
        /** @var CreatedOrderResponse $orderResponse */
        $orderResponse = $this->client->perform($orderAction);

        $cancelOrderCondition = new CancelCondition([$orderResponse->getPayload()->getOrderId()]);
        $action = new CancelOrderAction($cancelOrderCondition);
        /** @var EmptyResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }

    /** @dataProvider orderDataProvider */
    public function testSuccessCanCancelLimitOrder(array $conditionData): void
    {
        $orderCondition = new CreateLimitOrderCondition($conditionData);
        $orderAction = new CreateLimitOrderAction($orderCondition);
        /** @var CreatedOrderResponse $orderResponse */
        $orderResponse = $this->client->perform($orderAction);

        $cancelOrderCondition = new CancelCondition([$orderResponse->getPayload()->getOrderId()]);
        $action = new CancelOrderAction($cancelOrderCondition);
        /** @var EmptyResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }

    public function orderDataProvider(): array
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
        self::markTestSkipped('Sandbox orders auto execute.');
        parent::setUp();

        $balance = new CurrencyBalance(CurrencyEnum::USD(), 1000);
        $balanceAction = new SetCurrencyBalanceAction($balance);
        $this->client->perform($balanceAction);
    }
}
