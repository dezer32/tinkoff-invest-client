<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Integration\Action\Market;

use Dezer\TinkoffInvestApiClient\Actions\Market\GetBondsAction;
use Dezer\TinkoffInvestApiClient\Dto\Market\Bonds\InvestmentSecuritiesBondsResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Integration\AbstractIntegrationTest;

class GetBondsActionIntegrationTest extends AbstractIntegrationTest
{
    public function testSuccessCanGetBonds(): void
    {
        $action = new GetBondsAction();

        /** @var InvestmentSecuritiesBondsResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
    }
}
