<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use App\Models\;
class TopController extends Controller
{
    public function index()
    {
        \Log::debug('start TopContorller!');
        return view('top.index', compact('top'));
    }
}