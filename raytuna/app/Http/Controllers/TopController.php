<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\;
class TopController extends Controller
{
    public function index()
    {
        \Log::debug('start TopContorller!');
        $top = top::paginate(15);
        return view('top.index', compact('top'));
    }
}