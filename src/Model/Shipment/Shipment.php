<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Shipment;

final class Shipment
{
    private $shipmentId;
    private $shipmentDate;
    private $shipmentReference;
    private $shipmentItems;
    private $transport;
    private $customerDetails;

    /**
     * @param \BolCom\RetailerApi\Model\Shipment\ShipmentId $shipmentId
     * @param \BolCom\RetailerApi\Model\DateTime $shipmentDate
     * @param string $shipmentReference
     * @param \BolCom\RetailerApi\Model\Shipment\ShipmentItem[] $shipmentItems
     * @param \BolCom\RetailerApi\Model\Transport\Transport $transport
     * @param \BolCom\RetailerApi\Model\Customer\CustomerDetails $customerDetails
     */
    public function __construct(ShipmentId $shipmentId, \BolCom\RetailerApi\Model\DateTime $shipmentDate, ?string $shipmentReference, array $shipmentItems, ?\BolCom\RetailerApi\Model\Transport\Transport $transport, ?\BolCom\RetailerApi\Model\Customer\CustomerDetails $customerDetails)
    {
        $this->shipmentId = $shipmentId;
        $this->shipmentDate = $shipmentDate;
        $this->shipmentReference = $shipmentReference;
            $this->shipmentItems = [];
            foreach ($shipmentItems as $__value) {
                if (! $__value instanceof \BolCom\RetailerApi\Model\Shipment\ShipmentItem) {
                    throw new \InvalidArgumentException('shipmentItems expected an array of BolCom\RetailerApi\Model\Shipment\ShipmentItem');
                }
                $this->shipmentItems[] = $__value;
            }

        $this->transport = $transport;
        $this->customerDetails = $customerDetails;
    }

    public function shipmentId(): ShipmentId
    {
        return $this->shipmentId;
    }

    public function shipmentDate(): \BolCom\RetailerApi\Model\DateTime
    {
        return $this->shipmentDate;
    }

    public function shipmentReference(): ?string
    {
        return $this->shipmentReference;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Shipment\ShipmentItem[]
     */
    public function shipmentItems(): array
    {
        return $this->shipmentItems;
    }

    public function transport(): ?\BolCom\RetailerApi\Model\Transport\Transport
    {
        return $this->transport;
    }

    public function customerDetails(): ?\BolCom\RetailerApi\Model\Customer\CustomerDetails
    {
        return $this->customerDetails;
    }

    public function withShipmentId(ShipmentId $shipmentId): Shipment
    {
        return new self($shipmentId, $this->shipmentDate, $this->shipmentReference, $this->shipmentItems, $this->transport, $this->customerDetails);
    }

    public function withShipmentDate(\BolCom\RetailerApi\Model\DateTime $shipmentDate): Shipment
    {
        return new self($this->shipmentId, $shipmentDate, $this->shipmentReference, $this->shipmentItems, $this->transport, $this->customerDetails);
    }

    public function withShipmentReference(?string $shipmentReference): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $shipmentReference, $this->shipmentItems, $this->transport, $this->customerDetails);
    }

    /**
     * @param \BolCom\RetailerApi\Model\Shipment\ShipmentItem[] $shipmentItems
     * @return \BolCom\RetailerApi\Model\Shipment\Shipment
     */
    public function withShipmentItems(array $shipmentItems): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $this->shipmentReference, $shipmentItems, $this->transport, $this->customerDetails);
    }

    public function withTransport(?\BolCom\RetailerApi\Model\Transport\Transport $transport): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $this->shipmentReference, $this->shipmentItems, $transport, $this->customerDetails);
    }

    public function withCustomerDetails(?\BolCom\RetailerApi\Model\Customer\CustomerDetails $customerDetails): Shipment
    {
        return new self($this->shipmentId, $this->shipmentDate, $this->shipmentReference, $this->shipmentItems, $this->transport, $customerDetails);
    }

    public static function fromArray(array $data): Shipment
    {
        if (! isset($data['shipmentId']) || ! \is_int($data['shipmentId'])) {
            throw new \InvalidArgumentException("Key 'shipmentId' is missing in data array or is not a int");
        }

        $shipmentId = ShipmentId::fromScalar($data['shipmentId']);

        if (! isset($data['shipmentDate']) || ! \is_string($data['shipmentDate'])) {
            throw new \InvalidArgumentException("Key 'shipmentDate' is missing in data array or is not a string");
        }

        $shipmentDate = \BolCom\RetailerApi\Model\DateTime::fromString($data['shipmentDate']);

        if (isset($data['shipmentReference'])) {
            if (! \is_string($data['shipmentReference'])) {
                throw new \InvalidArgumentException("Value for 'shipmentReference' is not a string in data array");
            }

            $shipmentReference = $data['shipmentReference'];
        } else {
            $shipmentReference = null;
        }

        if (! isset($data['shipmentItems']) || ! \is_array($data['shipmentItems'])) {
            throw new \InvalidArgumentException("Key 'shipmentItems' is missing in data array or is not an array");
        }

        $shipmentItems = [];

        foreach ($data['shipmentItems'] as $__value) {
            if (! \is_array($data['shipmentItems'])) {
                throw new \InvalidArgumentException("Key 'shipmentItems' in data array or is not an array of arrays");
            }

            $shipmentItems[] = ShipmentItem::fromArray($__value);
        }

        if (isset($data['transport'])) {
            if (! \is_array($data['transport'])) {
                throw new \InvalidArgumentException("Value for 'transport' is not an array in data array");
            }

            $transport = \BolCom\RetailerApi\Model\Transport\Transport::fromArray($data['transport']);
        } else {
            $transport = null;
        }

        if (isset($data['customerDetails'])) {
            if (! \is_array($data['customerDetails'])) {
                throw new \InvalidArgumentException("Value for 'customerDetails' is not an array in data array");
            }

            $customerDetails = \BolCom\RetailerApi\Model\Customer\CustomerDetails::fromArray($data['customerDetails']);
        } else {
            $customerDetails = null;
        }

        return new self(
            $shipmentId,
            $shipmentDate,
            $shipmentReference,
            $shipmentItems,
            $transport,
            $customerDetails
        );
    }
}
