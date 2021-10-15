<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Features;

use Dezer\TinkoffInvestApiClient\TinkoffInvestApiClient;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class AbstractFeatureTest extends TestCase
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
    }
}
