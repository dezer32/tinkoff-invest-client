<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Sandbox;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\PositionBalanceAction;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\PositionBalance;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class SandboxPositionBalanceActionFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanSetPositionBalance(): void
    {
        $dto = new PositionBalance(['BBG000B9XRY4', 500]);
        $action = new PositionBalanceAction($dto);

        /** @var EmptyResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
        self::assertEmpty($response->getPayload());
    }
}
