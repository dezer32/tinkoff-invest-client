<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features\Actions\Sandbox;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\SetCurrencyBalanceAction;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\CurrencyBalance;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\Tests\Features\AbstractFeatureTest;

class SandboxCurrencyBalanceFeatureTest extends AbstractFeatureTest
{
    public function testSuccessCanSetBalance(): void
    {
        $dto = new CurrencyBalance([CurrencyEnum::RUB(), 500]);
        $action = new SetCurrencyBalanceAction($dto);

        /** @var EmptyResponse $response */
        $response = $this->client->perform($action);

        self::assertTrue($response->getStatus()->equals(ResponseStatusCodeEnum::OK()));
        self::assertEmpty($response->getPayload());
    }

    protected function setUp(): void
    {
        $this->markTestSkipped('Не производить действий с аккаунтом в песках без острой необходимости.');

        parent::setUp();
    }
}
