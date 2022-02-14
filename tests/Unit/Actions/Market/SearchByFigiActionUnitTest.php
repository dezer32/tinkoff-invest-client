<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\Actions\Market;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\Actions\Market\SearchByFIGIAction;
use Dezer\Investing\Tinkoff\ApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\Investing\Tinkoff\ApiClient\Dto\Market\SearchByFIGICondition;
use Dezer\Investing\Tinkoff\ApiClient\Tests\Unit\AbstractUnitTest;

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
