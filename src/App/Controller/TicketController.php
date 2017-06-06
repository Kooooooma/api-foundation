<?php

namespace App\Controller;

use ApiFoundation\Controller;
use App\Model\Ticket;
use App\Model\User;

class TicketController extends Controller
{
    public function staffCreateTicket()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->find('App\Model\User', 1);


        $ticket = new Ticket();
        $ticket->setNumber('0000001');
        $ticket->setSubject('first ticket');
        $ticket->setUser($user);

        $em->persist($ticket);
        $em->flush();
    }

    public function getTicketList($id)
    {
        var_dump($id);
    }
}
