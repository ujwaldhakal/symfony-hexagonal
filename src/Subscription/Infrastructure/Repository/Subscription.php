<?php

declare(strict_types=1);

namespace App\Subscription\Infrastructure\Repository;

use App\Subscription\Domain\DTO\Subscription as SubscriptionDto;
use App\Subscription\Domain\Port\Repository\SubscriptionInterface;
use App\Subscription\Domain\Entity\Subscription as SubscriptionEntity;

class Subscription implements SubscriptionInterface
{
    public function __construct(
        // inject any database adaptor
        )
    {

    }

    public function save(SubscriptionEntity $subscription) : void
    {
        // save entity to database
    }

}