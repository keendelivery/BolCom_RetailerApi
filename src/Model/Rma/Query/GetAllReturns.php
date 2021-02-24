<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma\Query;

final class GetAllReturns extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Rma\Query\GetAllReturns';

    protected $messageName = self::MESSAGE_NAME;

    public function page(): int
    {
        return $this->payload['page'];
    }

    public function handled(): bool
    {
        return $this->payload['handled'];
    }

    public function fulfilmentMethod(): \BolCom\RetailerApi\Model\Offer\FulfilmentMethod
    {
        return \BolCom\RetailerApi\Model\Offer\FulfilmentMethod::fromValue($this->payload['fulfilmentMethod']);
    }

    public static function with(int $page, bool $handled, \BolCom\RetailerApi\Model\Offer\FulfilmentMethod $fulfilmentMethod): GetAllReturns
    {
        return new self([
            'page' => $page,
            'handled' => $handled,
            'fulfilmentMethod' => $fulfilmentMethod->value(),
        ]);
    }

    protected function setPayload(array $payload): void
    {
        if (! isset($payload['page']) || ! \is_int($payload['page'])) {
            throw new \InvalidArgumentException("Key 'page' is missing in payload or is not a int");
        }

        if (! isset($payload['handled']) || ! \is_bool($payload['handled'])) {
            throw new \InvalidArgumentException("Key 'handled' is missing in payload or is not a bool");
        }

        if (! isset($payload['fulfilmentMethod']) || ! \is_string($payload['fulfilmentMethod'])) {
            throw new \InvalidArgumentException("Key 'fulfilmentMethod' is missing in payload or is not a string");
        }

        $this->payload = $payload;
    }
}
