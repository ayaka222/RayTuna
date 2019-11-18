<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Models\;
class MypageController extends Controller
{
    public function index()
    {
        \Log::debug('start MypageContorller!');
        return view('mypage.index', compact('mypage'));
    }
}