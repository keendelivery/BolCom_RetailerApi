<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Shipment\Query;

final class GetShipment extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Shipment\Query\GetShipment';

    protected $messageName = self::MESSAGE_NAME;

    public function shipmentId(): \BolCom\RetailerApi\Model\Shipment\ShipmentId
    {
        return \BolCom\RetailerApi\Model\Shipment\ShipmentId::fromScalar($this->payload['shipmentId']);
    }

    public static function with(\BolCom\RetailerApi\Model\Shipment\ShipmentId $shipmentId): GetShipment
    {
        return new self([
            'shipmentId' => $shipmentId->toScalar(),
        ]);
    }

    protected function setPayload(array $payload): void
    {
        if (! isset($payload['shipmentId']) || ! \is_int($payload['shipmentId'])) {
            throw new \InvalidArgumentException("Key 'shipmentId' is missing in payload or is not a int");
        }

        $this->payload = $payload;
    }
}
