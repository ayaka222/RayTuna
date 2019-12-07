<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        \Log::debug('start UserContorller!');
        return view('mypage.index', compact('mypage'));
    }
}