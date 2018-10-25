<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);
namespace BolCom\RetailerApi\Handler\Offer;

use BolCom\RetailerApi\Client;
use BolCom\RetailerApi\Model\Offer\Command\DeleteOffersInBulk;
use BolCom\RetailerApi\Model\Offer\CommandHandler\DeleteOffersInBulkHandlerInterface;

/**
 * @deprecated Please use the v4 version of the offer api
 */
class DeleteOffersInBulkHandler implements DeleteOffersInBulkHandlerInterface
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function __invoke(DeleteOffersInBulk $deleteOffersInBulk): void
    {
        $this->client->delete('/retailer/offers', [
            'json' => $deleteOffersInBulk->payload(),
            'headers' => [
                'Accept' => 'application/vnd.retailer.v3+json'
            ]
        ]);
    }
}
