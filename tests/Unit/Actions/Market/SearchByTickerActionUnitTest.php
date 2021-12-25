<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\SearchByTickerAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Market\SearchByTickerCondition;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class SearchByTickerActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeAction(): void
    {
        $condition = new SearchByTickerCondition(self::TICKER);
        $action = new SearchByTickerAction($condition);

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/search/by-ticker', $action->getUri());

        self::assertSame(
            [
                'query' => [
                    'ticker' => self::TICKER
                ]
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
