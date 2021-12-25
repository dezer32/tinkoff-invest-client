<?php

namespace Dezer\TinkoffInvestApiClient\Tests\Unit\Actions;

use DateTime;
use DateTimeInterface;
use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\TinkoffInvestApiClient\Actions\GetOperationsAction;
use Dezer\TinkoffInvestApiClient\Contracts\BrokerAccountIdCompatible;
use Dezer\TinkoffInvestApiClient\Dto\Operations\OperationsCondition;
use Dezer\TinkoffInvestApiClient\Tests\Unit\AbstractUnitTest;

class GetOperationsActionUnitTest extends AbstractUnitTest
{
    /** @dataProvider successCanMakeActionDataProvider */
    public function testSuccessCanMakeAction(array $conditionData): void
    {
        $condition = new OperationsCondition($conditionData);
        $action = new GetOperationsAction($condition);

        self::assertSame(HttpActionInterface::GET, $action->getMethod());
        self::assertSame('operations', $action->getUri());
        self::assertEquals(
            [
                'query' => array_merge(['figi' => $conditionData['figi'] ?? null], $conditionData)
            ],
            $action->getOptions()
        );
        self::assertEmpty($action->getExtraOptions());
        self::assertInstanceOf(BrokerAccountIdCompatible::class, $action);
    }

    public function successCanMakeActionDataProvider(): array
    {
        return [
            [
                [
                    'from' => (new DateTime())
                        ->modify('-1 day')
                        ->format(DateTimeInterface::ATOM),
                    'to' => (new DateTime())
                        ->format(DateTimeInterface::ATOM)
                ]
            ],
            [
                [
                    'from' => (new DateTime())
                        ->modify('-1 day')
                        ->format(DateTimeInterface::ATOM),
                    'to' => (new DateTime())
                        ->format(DateTimeInterface::ATOM),
                    'figi' => self::FIGI
                ]
            ]
        ];
    }
}
