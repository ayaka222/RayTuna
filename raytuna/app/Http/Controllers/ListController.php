<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\;
class ListController extends Controller
{
    public function index()
    {
        \Log::debug('start ListContorller!');
        return view('serch.list', compact('list'));
    }
}