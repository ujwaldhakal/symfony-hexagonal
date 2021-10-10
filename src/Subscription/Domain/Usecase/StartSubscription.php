<?php

declare(strict_types=1);


namespace App\Subscription\Domain\Usecase;

use App\Subscription\Domain\DTO\Subscription as SubscriptionDto;
use App\Subscription\Domain\Port\Repository\SubscriptionInterface;
use App\Subscription\Domain\Entity\Subscription as SubscriptionEntity;

class StartSubscription
{
    public function __construct(private SubscriptionInterface $repository) {}

    public function handle(SubscriptionDto $dto)
    {

        $entity = SubscriptionEntity::createFromDto($dto);
        $this->repository->save($entity);
    }

}