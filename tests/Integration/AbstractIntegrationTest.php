<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Integration;

use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use Dezer\TinkoffInvestApiClient\TinkoffInvestApiClient;
use Dezer\TinkoffInvestApiClient\TinkoffInvestClientSDK;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class AbstractIntegrationTest extends TestCase
{
    protected TinkoffInvestClientSDK $sdk;

    protected function setUp(): void
    {
        parent::setUp();
        $guzzleClient = new Client([
            'base_uri' => $_ENV['TINKOFF_BASE_URI'],
            'timeout' => 5.0
        ]);

        $client = new TinkoffInvestApiClient(
            $guzzleClient,
            $_ENV['TINKOFF_SECRET_KEY'],
            $this->createMock(LoggerInterface::class)
        );
        $client->setBrokerAccountId(new BrokerAccountId($_ENV['TINKOFF_BROKER_ACCOUNT_ID']));

        $this->sdk = new TinkoffInvestClientSDK($client, $this->createMock(LoggerInterface::class));
    }
}
