<?php

namespace App\Http\Controllers\admin\ticket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function newTickets()
    {
        return view('admin.ticket.index');
    }

    public function openTickets()
    {
        return view('admin.ticket.index');
    }

    public function closeTickets()
    {
        return view('admin.ticket.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ticket.index');
    }


    public function show()
    {
        return view('admin.ticket.show');
    }

}
