<?php

namespace App\Modules\Earthquake\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Show the application dashboard.
     */
    public function index(): Renderable
    {
        return view('earthquake::cabinet.events');
    }
}
