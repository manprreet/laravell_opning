<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Address;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function dashboard(Request $request)
    {
        $categories = Category::all();
        $user = (Auth::user()) ? Auth::user() : '';
        $user_id = $user ? $user->id : 0;
        $addresses = Address::select('*')->orderBy('company_name', 'asc')->where('user_id',$user_id)->get();
        $category = '';

        if($request->cat_id)
        {
            $dishes = Dish::with('favorite')->where('category_id',$request->cat_id);
            $category = Category::find($request->cat_id);
        }
        else
        {
            $dishes = Dish::with('favorite');
        }

        $dishes = ($request->all) ? $dishes->get() : $dishes->limit(12)->get();

        return view('user.dashboard',['categories' => $categories,'category' => $category, 'dishes' => $dishes, 'addresses' => $addresses, 'user' => $user]);
    }
}
