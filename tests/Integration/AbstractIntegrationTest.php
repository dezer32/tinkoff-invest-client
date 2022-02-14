<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Integration;

use Dezer\Investing\Tinkoff\ApiClient\Client;
use Dezer\Investing\Tinkoff\ApiClient\ClientSDK;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BrokerAccountId;
use GuzzleHttp\Client as GuzzleClient;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class AbstractIntegrationTest extends TestCase
{
    protected const FIGI = 'BBG000B9XRY4';

    protected ClientSDK $sdk;

    protected function setUp(): void
    {
        parent::setUp();
        $guzzleClient = new GuzzleClient([
            'base_uri' => $_ENV['TINKOFF_BASE_URI'],
            'timeout' => 5.0
        ]);

        $client = new Client(
            $guzzleClient,
            $_ENV['TINKOFF_SECRET_KEY'],
            $this->createMock(LoggerInterface::class)
        );
        $client->setBrokerAccountId(new BrokerAccountId($_ENV['TINKOFF_BROKER_ACCOUNT_ID']));

        $this->sdk = new ClientSDK($client, $this->createMock(LoggerInterface::class));
    }
}
