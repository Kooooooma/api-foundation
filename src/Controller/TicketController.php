<?php

namespace EasemobTickets\Controller;

use EasemobTickets\Controller;
use EasemobTickets\Model\Product;
use EasemobTickets\Model\Category;

class TicketController extends Controller
{
    public function staffCreateTicket($id, $rid)
    {
        $em = $this->getDoctrine()->getManager();

        
    }
}
