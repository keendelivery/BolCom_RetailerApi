<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Reduction\Query;

final class GetReductionList extends \Prooph\Common\Messaging\Query
{
    use \Prooph\Common\Messaging\PayloadTrait;

    public const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Reduction\Query\GetReductionList';

    protected $messageName = self::MESSAGE_NAME;

    protected function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }
}
