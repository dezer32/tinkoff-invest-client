<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Orders;

use Dezer\TinkoffInvestApiClient\Actions\Orders\CreateMarketOrderAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\ClearPositionsAction;
use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetCurrencyBalanceAction;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreatedOrderResponse;
use Dezer\TinkoffInvestApiClient\Dto\Orders\CreateMarketOrderCondition;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\CurrencyBalance;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Dezer\TinkoffInvestApiClient\Enums\OperationTypeEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class CreateMarketOrderActionFeatureTest extends AbstractFeatureTest
{
    /** @dataProvider createMarketConditionDataProvider */
    public function testSuccessCanCreateMarketOrder(array $marketOrderConditionData): void
    {
        $marketOrderCondition = new CreateMarketOrderCondition($marketOrderConditionData);
        $marketOrderAction = new CreateMarketOrderAction($marketOrderCondition);

        /** @var CreatedOrderResponse $response */
        $response = $this->client->perform($marketOrderAction);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }

    public function createMarketConditionDataProvider(): array
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

        $currencyBalance = new CurrencyBalance([CurrencyEnum::USD(), 1000]);
        $currencyBalanceAction = new SetCurrencyBalanceAction($currencyBalance);
        $this->client->perform($currencyBalanceAction);
    }
}
