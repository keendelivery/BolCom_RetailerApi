<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer;

final class Fulfilment
{
    private $type;
    private $deliveryCode;

    public function __construct(FulfilmentMethod $type, ?DeliveryCode $deliveryCode)
    {
        $this->type = $type;
        $this->deliveryCode = $deliveryCode;
    }

    public function type(): FulfilmentMethod
    {
        return $this->type;
    }

    public function deliveryCode(): ?DeliveryCode
    {
        return $this->deliveryCode;
    }

    public function withType(FulfilmentMethod $type): Fulfilment
    {
        return new self($type, $this->deliveryCode);
    }

    public function withDeliveryCode(?DeliveryCode $deliveryCode): Fulfilment
    {
        return new self($this->type, $deliveryCode);
    }

    public static function fromArray(array $data): Fulfilment
    {
        if (! isset($data['type']) || ! \is_string($data['type'])) {
            throw new \InvalidArgumentException("Key 'type' is missing in data array or is not a string");
        }

        $type = FulfilmentMethod::fromValue($data['type']);

        if (isset($data['deliveryCode'])) {
            if (! \is_string($data['deliveryCode'])) {
                throw new \InvalidArgumentException("Value for 'deliveryCode' is not a string in data array");
            }

            $deliveryCode = DeliveryCode::fromValue($data['deliveryCode']);
        } else {
            $deliveryCode = null;
        }

        return new self($type, $deliveryCode);
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type->value(),
            'deliveryCode' => null === $this->deliveryCode ? null : $this->deliveryCode->value(),
        ];
    }
}
