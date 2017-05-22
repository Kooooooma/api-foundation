<?php

namespace ApiFoundation\Controller;

use ApiFoundation\Controller;
use ApiFoundation\Model\Product;
use ApiFoundation\Model\Category;

class TicketController extends Controller
{
    public function staffCreateTicket($id, $rid)
    {
        $em = $this->getDoctrine()->getManager();

        $this->responseJson(200, "OK");
    }
}
