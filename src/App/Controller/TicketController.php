<?php

namespace App\Controller;

use ApiFoundation\Controller;

class TicketController extends Controller
{
    public function staffCreateTicket()
    {
        echo 111;
    }

    public function getTicketList($id)
    {
        var_dump($id);
    }
}
