<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order;

final class OrderItem
{
    private $orderItemId;
    private $offerReference;
    private $ean;
    private $title;
    private $quantity;
    private $offerPrice;
    private $offerId;
    private $transactionFee;
    private $latestDeliveryDate;
    private $offerCondition;
    private $cancelRequest;
    private $fulfilmentMethod;
    private $selectedDeliveryWindow;

    public function __construct(OrderItemId $orderItemId, string $offerReference = null, \BolCom\RetailerApi\Model\Offer\Ean $ean, string $title, Quantity $quantity, \BolCom\RetailerApi\Model\CurrencyAmount $offerPrice, \BolCom\RetailerApi\Model\Offer\OfferId $offerId, \BolCom\RetailerApi\Model\CurrencyAmount $transactionFee, \BolCom\RetailerApi\Model\Date $latestDeliveryDate, \BolCom\RetailerApi\Model\Offer\Condition $offerCondition, bool $cancelRequest, \BolCom\RetailerApi\Model\Offer\FulfilmentMethod $fulfilmentMethod, SelectedDeliveryWindow $selectedDeliveryWindow = null)
    {
        $this->orderItemId = $orderItemId;
        $this->offerReference = $offerReference;
        $this->ean = $ean;
        $this->title = $title;
        $this->quantity = $quantity;
        $this->offerPrice = $offerPrice;
        $this->offerId = $offerId;
        $this->transactionFee = $transactionFee;
        $this->latestDeliveryDate = $latestDeliveryDate;
        $this->offerCondition = $offerCondition;
        $this->cancelRequest = $cancelRequest;
        $this->fulfilmentMethod = $fulfilmentMethod;
        $this->selectedDeliveryWindow = $selectedDeliveryWindow;
    }

    public function orderItemId(): OrderItemId
    {
        return $this->orderItemId;
    }

    public function offerReference()
    {
        return $this->offerReference;
    }

    public function ean(): \BolCom\RetailerApi\Model\Offer\Ean
    {
        return $this->ean;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function quantity(): Quantity
    {
        return $this->quantity;
    }

    public function offerPrice(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->offerPrice;
    }

    public function offerId(): \BolCom\RetailerApi\Model\Offer\OfferId
    {
        return $this->offerId;
    }

    public function transactionFee(): \BolCom\RetailerApi\Model\CurrencyAmount
    {
        return $this->transactionFee;
    }

    public function latestDeliveryDate(): \BolCom\RetailerApi\Model\Date
    {
        return $this->latestDeliveryDate;
    }

    public function offerCondition(): \BolCom\RetailerApi\Model\Offer\Condition
    {
        return $this->offerCondition;
    }

    public function cancelRequest(): bool
    {
        return $this->cancelRequest;
    }

    public function fulfilmentMethod(): \BolCom\RetailerApi\Model\Offer\FulfilmentMethod
    {
        return $this->fulfilmentMethod;
    }

    public function selectedDeliveryWindow()
    {
        return $this->selectedDeliveryWindow;
    }

    public function withOrderItemId(OrderItemId $orderItemId): OrderItem
    {
        return new self($orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withOfferReference(string $offerReference = null): OrderItem
    {
        return new self($this->orderItemId, $offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withEan(\BolCom\RetailerApi\Model\Offer\Ean $ean): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withTitle(string $title): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withQuantity(Quantity $quantity): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withOfferPrice(\BolCom\RetailerApi\Model\CurrencyAmount $offerPrice): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withOfferId(\BolCom\RetailerApi\Model\Offer\OfferId $offerId): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withTransactionFee(\BolCom\RetailerApi\Model\CurrencyAmount $transactionFee): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withLatestDeliveryDate(\BolCom\RetailerApi\Model\Date $latestDeliveryDate): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withOfferCondition(\BolCom\RetailerApi\Model\Offer\Condition $offerCondition): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withCancelRequest(bool $cancelRequest): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $cancelRequest, $this->fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withFulfilmentMethod(\BolCom\RetailerApi\Model\Offer\FulfilmentMethod $fulfilmentMethod): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $fulfilmentMethod, $this->selectedDeliveryWindow);
    }

    public function withSelectedDeliveryWindow(SelectedDeliveryWindow $selectedDeliveryWindow = null): OrderItem
    {
        return new self($this->orderItemId, $this->offerReference, $this->ean, $this->title, $this->quantity, $this->offerPrice, $this->offerId, $this->transactionFee, $this->latestDeliveryDate, $this->offerCondition, $this->cancelRequest, $this->fulfilmentMethod, $selectedDeliveryWindow);
    }

    public static function fromArray(array $data): OrderItem
    {
        if (! isset($data['orderItemId']) || ! \is_string($data['orderItemId'])) {
            throw new \InvalidArgumentException("Key 'orderItemId' is missing in data array or is not a string");
        }

        $orderItemId = OrderItemId::fromString($data['orderItemId']);

        if (isset($data['offerReference'])) {
            if (! \is_string($data['offerReference'])) {
                throw new \InvalidArgumentException("Value for 'offerReference' is not a string in data array");
            }

            $offerReference = $data['offerReference'];
        } else {
            $offerReference = null;
        }

        if (! isset($data['ean']) || ! \is_string($data['ean'])) {
            throw new \InvalidArgumentException("Key 'ean' is missing in data array or is not a string");
        }

        $ean = \BolCom\RetailerApi\Model\Offer\Ean::fromString($data['ean']);

        if (! isset($data['title']) || ! \is_string($data['title'])) {
            throw new \InvalidArgumentException("Key 'title' is missing in data array or is not a string");
        }

        $title = $data['title'];

        if (! isset($data['quantity']) || ! \is_int($data['quantity'])) {
            throw new \InvalidArgumentException("Key 'quantity' is missing in data array or is not a int");
        }

        $quantity = Quantity::fromScalar($data['quantity']);

        if (! isset($data['offerPrice']) || (! \is_float($data['offerPrice']) && ! \is_int($data['offerPrice']))) {
            throw new \InvalidArgumentException("Key 'offerPrice' is missing in data array or is not a float");
        }

        $offerPrice = \BolCom\RetailerApi\Model\CurrencyAmount::fromScalar($data['offerPrice']);

        if (! isset($data['offerId']) || ! \is_string($data['offerId'])) {
            throw new \InvalidArgumentException("Key 'offerId' is missing in data array or is not a string");
        }

        $offerId = \BolCom\RetailerApi\Model\Offer\OfferId::fromString($data['offerId']);

        if (! isset($data['transactionFee']) || (! \is_float($data['transactionFee']) && ! \is_int($data['transactionFee']))) {
            throw new \InvalidArgumentException("Key 'transactionFee' is missing in data array or is not a float");
        }

        $transactionFee = \BolCom\RetailerApi\Model\CurrencyAmount::fromScalar($data['transactionFee']);

        if (! isset($data['latestDeliveryDate']) || ! \is_string($data['latestDeliveryDate'])) {
            throw new \InvalidArgumentException("Key 'latestDeliveryDate' is missing in data array or is not a string");
        }

        $latestDeliveryDate = \BolCom\RetailerApi\Model\Date::fromString($data['latestDeliveryDate']);

        if (! isset($data['offerCondition']) || ! \is_string($data['offerCondition'])) {
            throw new \InvalidArgumentException("Key 'offerCondition' is missing in data array or is not a string");
        }

        $offerCondition = \BolCom\RetailerApi\Model\Offer\Condition::fromValue($data['offerCondition']);

        if (! isset($data['cancelRequest']) || ! \is_bool($data['cancelRequest'])) {
            throw new \InvalidArgumentException("Key 'cancelRequest' is missing in data array or is not a bool");
        }

        $cancelRequest = $data['cancelRequest'];

        if (! isset($data['fulfilmentMethod']) || ! \is_string($data['fulfilmentMethod'])) {
            throw new \InvalidArgumentException("Key 'fulfilmentMethod' is missing in data array or is not a string");
        }

        $fulfilmentMethod = \BolCom\RetailerApi\Model\Offer\FulfilmentMethod::fromValue($data['fulfilmentMethod']);

        if (isset($data['selectedDeliveryWindow'])) {
            if (! \is_array($data['selectedDeliveryWindow'])) {
                throw new \InvalidArgumentException("Value for 'selectedDeliveryWindow' is not an array in data array");
            }

            $selectedDeliveryWindow = SelectedDeliveryWindow::fromArray($data['selectedDeliveryWindow']);
        } else {
            $selectedDeliveryWindow = null;
        }

        return new self(
            $orderItemId,
            $offerReference,
            $ean,
            $title,
            $quantity,
            $offerPrice,
            $offerId,
            $transactionFee,
            $latestDeliveryDate,
            $offerCondition,
            $cancelRequest,
            $fulfilmentMethod,
            $selectedDeliveryWindow
        );
    }
}
