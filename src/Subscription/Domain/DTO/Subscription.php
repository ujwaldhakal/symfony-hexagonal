<?php

declare(strict_types=1);


namespace App\Subscription\Domain\DTO;

final class Subscription
{
    public function __construct(
        private int $planId,
        private int $addonId,
    ){}

    public function getPlandId() : int
    {
        return $this->planId;
    }

    public function getAddonId() : int
    {
        return $this->addonId;
    }

    public function isValid() : bool
    {
        return $this->planId > 0 && !empty($this->userId);
    }

}