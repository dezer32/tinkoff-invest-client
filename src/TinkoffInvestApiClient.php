<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient;

use Dezer\BaseHttpClient\ApiClient;
use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\BrokerAccountId;
use GuzzleHttp\RequestOptions;

class TinkoffInvestApiClient extends ApiClient
{
    private ?BrokerAccountId $brokerAccountId = null;

    public function perform(HttpActionInterface $action)
    {
        if (
            null !== $this->getBrokerAccountId()
            && is_a($action, BrokerAccountIdCompatible::class)
        ) {
            $action->setExtraOptions([
                RequestOptions::QUERY => $this->getBrokerAccountId()->toArray()
            ]);
        }

        return parent::perform($action);
    }

    public function getBrokerAccountId(): ?BrokerAccountId
    {
        return $this->brokerAccountId;
    }
}
