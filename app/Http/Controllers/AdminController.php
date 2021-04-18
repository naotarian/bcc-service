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
    
    public function item_register()
    {
        return view('admin.item_register');
    }
    public function item_register_post(Request $request)
    {
        $user = $this->user;
        $user_id = $user->id;
        $validated = $request->validate([
            'title' => 'required|unique:items,title',
            'price' => 'required',
            'is_coupon' => 'required',
        ]);
        
        $datas = $request->all();
        
        $new_item = new Item();
        $new_item->fill(['title' => $datas['title'], 'price' => $datas['price'], 'is_coupon' => $datas['is_coupon'], 'user_id' => $user_id]);
        $new_item->save();
        return redirect('mypage');
    }
}
