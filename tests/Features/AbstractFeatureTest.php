<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features;

use Dezer\TinkoffInvestApiClient\Actions\Sandbox\RegisterAccountAction;
use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\RegisterResponse;
use Dezer\TinkoffInvestApiClient\TinkoffInvestApiClient;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

abstract class AbstractFeatureTest extends TestCase
{
    protected TinkoffInvestApiClient $client;
    protected ?RegisterResponse $registeredAccount = null;

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

        $this->registeredAccount = $this->client->perform($registerAction);

        $this->client->setBrokerAccountId(
            new BrokerAccountId($this->registeredAccount->getPayload()->getBrokerAccountId())
        );
    }
}
