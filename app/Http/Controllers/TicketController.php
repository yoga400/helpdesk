<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::get();
        return view('pages.ticket.index', [
            'tickets' => $tickets
        ]);
    }

    public function create()
    {
        $users = User::where('role_id', '=', 2)->get();
        return view('pages.ticket.create', [
            'users' => $users
        ]);
    }
}
