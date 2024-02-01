<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Dish;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;

class CheckoutController extends Controller
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
        $user = Auth::user();
        $cartTotal = $user->cart->dishDetails()->select(DB::raw('sum(qty * price) as total'))->get()->sum('total');
        return view('user.checkout.index', ['user' => $user, 'cartAmount' => $cartTotal]);
    }

    public function idealPayment()
    {
        $stripe = new \Stripe\StripeClient(config('params.stripe.sandbox.secret_key'));

        $paymentIntent = $stripe->paymentIntents->create([
          'payment_method_types' => ['ideal'],
          'amount' => 4,
          'currency' => 'eur',
        ]);

        return view('user.checkout.ideal-payment',['paymentIntent' => $paymentIntent]);
    }


}
