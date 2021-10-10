<?php

declare(strict_types=1);


namespace App\Controller;

use App\Subscription\Application\Command\StartSubscription;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Subscription extends AbstractController
{

    /**
     * @Route("/subscription", name="start")
     */
    public function start(Request $request, MessageBusInterface $messageBus)
    {
        $planId = (int) $request->get('plan_id');
        $addOnId = (int) $request->get('addon_id');
        $messageBus->dispatch(new StartSubscription($planId,$addOnId));

        return $this->json([], Response::HTTP_NO_CONTENT);
    }
}