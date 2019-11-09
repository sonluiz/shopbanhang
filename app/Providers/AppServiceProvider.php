<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('header',function ($view1){
            $loaisanpham = ProductType::all();
//            if (Session('cart')){
//                $oldCart = Session::get('cart');
//                $cart = new Cart($oldCart);
//            }
            $view1->with('sanphamtype',$loaisanpham);

        });
    }
}
