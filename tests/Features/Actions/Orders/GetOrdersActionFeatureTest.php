<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Orders;

use Dezer\TinkoffInvestApiClient\Actions\Orders\GetOrdersAction;
use Dezer\TinkoffInvestApiClient\Dto\Orders\OrdersResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class GetOrdersActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanGetOrders(): void
    {
        $action = new GetOrdersAction();

        /** @var OrdersResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
