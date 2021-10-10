<?php

declare(strict_types=1);


namespace App\Subscription\Application\CommandHandler;


use App\Subscription\Application\Command\StartSubscription;
use App\Subscription\Domain\DTO\Subscription as SubscrptionDto;
use App\Subscription\Domain\Port\Repository\SubscriptionInterface as SubscriptionRepository;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use App\Subscription\Domain\Usecase\StartSubscription as StartSubscriptionUseCase;

final class StartSubscriptionHandler implements MessageHandlerInterface
{
    public function __construct(private SubscriptionRepository $repository){}


    public function __invoke(StartSubscription $command)
    {
        $dto = new SubscrptionDto($command->getPlanId(),$command->getAddonId());
        (new StartSubscriptionUseCase($this->repository))->handle($dto);
    }
}