<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions;

use Dezer\TinkoffInvestApiClient\Actions\GetPortfolioAction;
use Dezer\TinkoffInvestApiClient\Dto\Portfolio\PortfolioResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class PortfolioActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanGetPortfolio(): void
    {
        $action = new GetPortfolioAction();

        /** @var PortfolioResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
