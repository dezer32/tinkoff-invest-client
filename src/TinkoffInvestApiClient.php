<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient;

use Dezer\BaseHttpClient\ApiClient;
use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerInterface;

class TinkoffInvestApiClient extends ApiClient
{
    private ?BrokerAccountId $brokerAccountId = null;
    private string $secretKey;

    public function __construct(Client $client, string $secretKey, LoggerInterface $logger)
    {
        parent::__construct($client, $logger);
        $this->secretKey = $secretKey;
    }

    public function perform(HttpActionInterface $action)
    {
        if (
            null !== $this->brokerAccountId
            && is_a($action, BrokerAccountIdCompatible::class)
        ) {
            $action->setExtraOptions([
                RequestOptions::QUERY => $this->brokerAccountId->toArray()
            ]);
        }

        return parent::perform($action);
    }

    public function setBrokerAccountId(?BrokerAccountId $brokerAccountId): self
    {
        $this->brokerAccountId = $brokerAccountId;

        return $this;
    }

    protected function getBaseHeaders(): array
    {
        return array_merge(parent::getBaseHeaders(), [
            'Authorization' => sprintf('Bearer %s', $this->secretKey),
        ]);
    }
}
