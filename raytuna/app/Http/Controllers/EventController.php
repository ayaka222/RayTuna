<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\;
class EventController extends Controller
{
    public function index()
    {
        \Log::debug('start EventContorller!');
        return view('event.index', compact('event'));
    }
}