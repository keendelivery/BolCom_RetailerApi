<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class Inbound
{
    private $id;
    private $reference;
    private $creationDate;
    private $state;
    private $labellingService;
    private $announcedBSKUs;
    private $announcedQuantity;
    private $receivedBSKUs;
    private $receivedQuantity;
    private $timeslot;
    private $products;
    private $stateTransitions;
    private $fbbTransporter;

    /**
     * @param \BolCom\RetailerApi\Model\Inbound\InboundId $id
     * @param \BolCom\RetailerApi\Model\Inbound\Reference $reference
     * @param \BolCom\RetailerApi\Model\DateTime $creationDate
     * @param \BolCom\RetailerApi\Model\Inbound\State $state
     * @param bool $labellingService
     * @param int $announcedBSKUs
     * @param int $announcedQuantity
     * @param int $receivedBSKUs
     * @param int $receivedQuantity
     * @param \BolCom\RetailerApi\Model\Inbound\Timeslot $timeslot
     * @param \BolCom\RetailerApi\Model\Inbound\Product[] $products
     * @param \BolCom\RetailerApi\Model\Inbound\StateTransition[] $stateTransitions
     * @param \BolCom\RetailerApi\Model\Inbound\Transporter $fbbTransporter
     */
    public function __construct(InboundId $id, Reference $reference, ?\BolCom\RetailerApi\Model\DateTime $creationDate, State $state, bool $labellingService, int $announcedBSKUs, int $announcedQuantity, int $receivedBSKUs, int $receivedQuantity, Timeslot $timeslot, array $products, array $stateTransitions, Transporter $fbbTransporter)
    {
        $this->id = $id;
        $this->reference = $reference;
        $this->creationDate = $creationDate;
        $this->state = $state;
        $this->labellingService = $labellingService;
        $this->announcedBSKUs = $announcedBSKUs;
        $this->announcedQuantity = $announcedQuantity;
        $this->receivedBSKUs = $receivedBSKUs;
        $this->receivedQuantity = $receivedQuantity;
        $this->timeslot = $timeslot;
            $this->products = [];
            foreach ($products as $__value) {
                if (! $__value instanceof \BolCom\RetailerApi\Model\Inbound\Product) {
                    throw new \InvalidArgumentException('products expected an array of BolCom\RetailerApi\Model\Inbound\Product');
                }
                $this->products[] = $__value;
            }

            $this->stateTransitions = [];
            foreach ($stateTransitions as $__value) {
                if (! $__value instanceof \BolCom\RetailerApi\Model\Inbound\StateTransition) {
                    throw new \InvalidArgumentException('stateTransitions expected an array of BolCom\RetailerApi\Model\Inbound\StateTransition');
                }
                $this->stateTransitions[] = $__value;
            }

        $this->fbbTransporter = $fbbTransporter;
    }

    public function id(): InboundId
    {
        return $this->id;
    }

    public function reference(): Reference
    {
        return $this->reference;
    }

    public function creationDate(): ?\BolCom\RetailerApi\Model\DateTime
    {
        return $this->creationDate;
    }

    public function state(): State
    {
        return $this->state;
    }

    public function labellingService(): bool
    {
        return $this->labellingService;
    }

    public function announcedBSKUs(): int
    {
        return $this->announcedBSKUs;
    }

    public function announcedQuantity(): int
    {
        return $this->announcedQuantity;
    }

    public function receivedBSKUs(): int
    {
        return $this->receivedBSKUs;
    }

    public function receivedQuantity(): int
    {
        return $this->receivedQuantity;
    }

    public function timeslot(): Timeslot
    {
        return $this->timeslot;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Inbound\Product[]
     */
    public function products(): array
    {
        return $this->products;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Inbound\StateTransition[]
     */
    public function stateTransitions(): array
    {
        return $this->stateTransitions;
    }

    public function fbbTransporter(): Transporter
    {
        return $this->fbbTransporter;
    }

    public function withId(InboundId $id): Inbound
    {
        return new self($id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withReference(Reference $reference): Inbound
    {
        return new self($this->id, $reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withCreationDate(?\BolCom\RetailerApi\Model\DateTime $creationDate): Inbound
    {
        return new self($this->id, $this->reference, $creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withState(State $state): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withLabellingService(bool $labellingService): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withAnnouncedBSKUs(int $announcedBSKUs): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withAnnouncedQuantity(int $announcedQuantity): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withReceivedBSKUs(int $receivedBSKUs): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withReceivedQuantity(int $receivedQuantity): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    public function withTimeslot(Timeslot $timeslot): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $timeslot, $this->products, $this->stateTransitions, $this->fbbTransporter);
    }

    /**
     * @param \BolCom\RetailerApi\Model\Inbound\Product[] $products
     * @return \BolCom\RetailerApi\Model\Inbound\Inbound
     */
    public function withProducts(array $products): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $products, $this->stateTransitions, $this->fbbTransporter);
    }

    /**
     * @param \BolCom\RetailerApi\Model\Inbound\StateTransition[] $stateTransitions
     * @return \BolCom\RetailerApi\Model\Inbound\Inbound
     */
    public function withStateTransitions(array $stateTransitions): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $stateTransitions, $this->fbbTransporter);
    }

    public function withFbbTransporter(Transporter $fbbTransporter): Inbound
    {
        return new self($this->id, $this->reference, $this->creationDate, $this->state, $this->labellingService, $this->announcedBSKUs, $this->announcedQuantity, $this->receivedBSKUs, $this->receivedQuantity, $this->timeslot, $this->products, $this->stateTransitions, $fbbTransporter);
    }

    public static function fromArray(array $data): Inbound
    {
        if (! isset($data['id']) || ! \is_int($data['id'])) {
            throw new \InvalidArgumentException("Key 'id' is missing in data array or is not a int");
        }

        $id = InboundId::fromScalar($data['id']);

        if (! isset($data['reference']) || ! \is_string($data['reference'])) {
            throw new \InvalidArgumentException("Key 'reference' is missing in data array or is not a string");
        }

        $reference = Reference::fromString($data['reference']);

        if (isset($data['creationDate'])) {
            if (! \is_string($data['creationDate'])) {
                throw new \InvalidArgumentException("Value for 'creationDate' is not a string in data array");
            }

            $creationDate = \BolCom\RetailerApi\Model\DateTime::fromString($data['creationDate']);
        } else {
            $creationDate = null;
        }

        if (! isset($data['state']) || ! \is_string($data['state'])) {
            throw new \InvalidArgumentException("Key 'state' is missing in data array or is not a string");
        }

        $state = State::fromValue($data['state']);

        if (! isset($data['labellingService']) || ! \is_bool($data['labellingService'])) {
            throw new \InvalidArgumentException("Key 'labellingService' is missing in data array or is not a bool");
        }

        $labellingService = $data['labellingService'];

        if (! isset($data['announcedBSKUs']) || ! \is_int($data['announcedBSKUs'])) {
            throw new \InvalidArgumentException("Key 'announcedBSKUs' is missing in data array or is not a int");
        }

        $announcedBSKUs = $data['announcedBSKUs'];

        if (! isset($data['announcedQuantity']) || ! \is_int($data['announcedQuantity'])) {
            throw new \InvalidArgumentException("Key 'announcedQuantity' is missing in data array or is not a int");
        }

        $announcedQuantity = $data['announcedQuantity'];

        if (! isset($data['receivedBSKUs']) || ! \is_int($data['receivedBSKUs'])) {
            throw new \InvalidArgumentException("Key 'receivedBSKUs' is missing in data array or is not a int");
        }

        $receivedBSKUs = $data['receivedBSKUs'];

        if (! isset($data['receivedQuantity']) || ! \is_int($data['receivedQuantity'])) {
            throw new \InvalidArgumentException("Key 'receivedQuantity' is missing in data array or is not a int");
        }

        $receivedQuantity = $data['receivedQuantity'];

        if (! isset($data['timeslot']) || ! \is_array($data['timeslot'])) {
            throw new \InvalidArgumentException("Key 'timeslot' is missing in data array or is not an array");
        }

        $timeslot = Timeslot::fromArray($data['timeslot']);

        if (! isset($data['products']) || ! \is_array($data['products'])) {
            throw new \InvalidArgumentException("Key 'products' is missing in data array or is not an array");
        }

        $products = [];

        foreach ($data['products'] as $__value) {
            if (! \is_array($data['products'])) {
                throw new \InvalidArgumentException("Key 'products' in data array or is not an array of arrays");
            }

            $products[] = Product::fromArray($__value);
        }

        if (! isset($data['stateTransitions']) || ! \is_array($data['stateTransitions'])) {
            throw new \InvalidArgumentException("Key 'stateTransitions' is missing in data array or is not an array");
        }

        $stateTransitions = [];

        foreach ($data['stateTransitions'] as $__value) {
            if (! \is_array($data['stateTransitions'])) {
                throw new \InvalidArgumentException("Key 'stateTransitions' in data array or is not an array of arrays");
            }

            $stateTransitions[] = StateTransition::fromArray($__value);
        }

        if (! isset($data['fbbTransporter']) || ! \is_array($data['fbbTransporter'])) {
            throw new \InvalidArgumentException("Key 'fbbTransporter' is missing in data array or is not an array");
        }

        $fbbTransporter = Transporter::fromArray($data['fbbTransporter']);

        return new self(
            $id,
            $reference,
            $creationDate,
            $state,
            $labellingService,
            $announcedBSKUs,
            $announcedQuantity,
            $receivedBSKUs,
            $receivedQuantity,
            $timeslot,
            $products,
            $stateTransitions,
            $fbbTransporter
        );
    }
}
