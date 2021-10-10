<?php

declare(strict_types=1);


namespace App\Subscription\Domain\Entity;

use App\Subscription\Domain\DTO\Subscription as SubscriptionDto;

final class Subscription
{
    private function __construct(private int $planId, private int $addonId){}

    public static function createFromDto(SubscriptionDto $dto)
    {
        return new self($dto->getPlandId(),$dto->getAddonId());
    }

}