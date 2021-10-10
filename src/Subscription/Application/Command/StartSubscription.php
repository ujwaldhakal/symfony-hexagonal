<?php

declare(strict_types=1);


namespace App\Subscription\Application\Command;

final class StartSubscription
{
    public function __construct(private int $planId, private int $addonId){}

    public function getPlanId() : int
    {
        return $this->planId;
    }

    public function getAddonId() : int
    {
        return $this->addonId;
    }
}