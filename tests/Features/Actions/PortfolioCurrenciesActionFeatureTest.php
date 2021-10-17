<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Dezer\TinkoffInvestApiClient\Actions\GetPortfolioCurrenciesAction;
use Dezer\TinkoffInvestApiClient\Dto\Portfolio\CurrenciesResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class PortfolioCurrenciesActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanGetPortfolioCurrencies(): void
    {
        $action = new GetPortfolioCurrenciesAction();

        /** @var CurrenciesResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
