<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware(function ($request, $next) {
            //user情報取得
            $this->user = \Auth::user();

            return $next($request);
        });
    }
    public function index() 
    {
        $user = $this->user;
        $items = Item::where('user_id', $user->id)->get();
        return view ('admin.mypage', compact('user','items'));
    }
}
