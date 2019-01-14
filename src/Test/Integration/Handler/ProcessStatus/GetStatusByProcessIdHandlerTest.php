<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Test\Integration\Handler\ProcessStatus;

use BolCom\RetailerApi\Client\ClientConfig;
use BolCom\RetailerApi\Infrastructure\ClientPool;
use BolCom\RetailerApi\Model\ProcessStatus\Query\GetStatusByProcessId;

class GetStatusByProcessIdHandlerTest extends \PHPUnit\Framework\TestCase
{
    public function test__invoke(): void
    {
        $this->markTestSkipped('Unable to fetch Process Status, contacted bol.com about this issue.');

        $clientPool = ClientPool::configure(new ClientConfig(
            BOL_CLIENT_ID,
            BOL_CLIENT_SECRET,
            'https://api.bol.com/retailer-demo/'
        ));
        $messageBus = new \BolCom\RetailerApi\Infrastructure\MessageBus($clientPool);

        $messageBus->dispatch(GetStatusByProcessId::with(6107432387));
    }
}
