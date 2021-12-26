<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\Market\SearchByFIGIAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Market\SearchByFIGICondition;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class SearchByFigiActionUnitTest extends AbstractUnitTest
{
    public function testSuccessCanMakeAction(): void
    {
        $condition = new SearchByFIGICondition(self::FIGI);
        $action = new SearchByFIGIAction($condition);

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('market/search/by-figi', $action->getUri());

        self::assertSame(
            [
                'query' => [
                    'figi' => self::FIGI
                ]
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());

        self::assertNotInstanceOf(BrokerAccountIdCompatible::class, $action);
    }
}
