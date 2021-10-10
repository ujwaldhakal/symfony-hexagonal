<?php

declare(strict_types=1);


namespace App\Subscription\Domain\Port\Validator;

interface ValidatorInterface
{
    public function validate() : bool;
}