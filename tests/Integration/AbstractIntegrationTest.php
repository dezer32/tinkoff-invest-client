<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Integration;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAccountAction;
use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\RegisterResponse;
use Dezer\TinkoffInvestApiClient\Enums\ResponseStatusCodeEnum;
use Dezer\TinkoffInvestApiClient\TinkoffInvestApiClient;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class AbstractIntegrationTest extends TestCase
{
    protected TinkoffInvestApiClient $client;

    protected function setUp(): void
    {
        parent::setUp();
        $guzzleClient = new Client([
            'base_uri' => $_ENV['TINKOFF_BASE_URI'],
            'timeout' => 5.0
        ]);

        $this->client = new TinkoffInvestApiClient(
            $guzzleClient,
            $_ENV['TINKOFF_SECRET_KEY'],
            $this->createMock(LoggerInterface::class)
        );

        $registerAction = new RegisterAccountAction();

        /** @var RegisterResponse $registeredAccount */
        $registeredAccount = $this->client->perform($registerAction);

        if ($registeredAccount->getStatus()->equals(ResponseStatusCodeEnum::ERROR())) {
            throw new \RuntimeException('Не удалось зарегистрировать акканут.');
        }

        $this->client->setBrokerAccountId(
            new BrokerAccountId($registeredAccount->getPayload()->getBrokerAccountId())
        );
    }
}
