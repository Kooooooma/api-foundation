<?php

namespace App\Controller;

use ApiFoundation\Controller;
use App\Model\Ticket;
use App\Model\User;
use Doctrine\Common\Util\Debug;

class TicketController extends Controller
{
    public function staffCreateTicket()
    {
        $em = $this->getDoctrine()->getManager();

        //创建User
//        $user = new User();
//        $user->setUsername('fanta');
//        $user->setPasswd('test@qq.com');
//
//        $em->persist($user);
//        $ret = $em->flush();

        //查询一个User
        $user = $this->getDoctrine()->find('User', 2);
//        Debug::dump($user);
//        echo $user->getUsername();

        //创建工单
        $ticket = new Ticket();
        $ticket->setSubject('test a new ticket');
        $ticket->setNumber('0000009');
        $ticket->setUser($user);

        $em->persist($ticket);
        $em->flush();

        //查询Ticket
        $ticket = $this->getDoctrine()->find('Ticket', $ticket->getId());
        Debug::dump($ticket);
    }

    public function getTicketList($id)
    {
        var_dump($id);
    }
}
