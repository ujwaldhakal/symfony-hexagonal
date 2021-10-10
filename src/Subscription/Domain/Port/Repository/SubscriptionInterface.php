<?php

declare(strict_types=1);

namespace App\Subscription\Domain\Port\Repository;

use App\Subscription\Domain\Entity\Subscription as SubscriptionEntity;

interface SubscriptionInterface
{
    public function save(SubscriptionEntity $subscription) : void;
}