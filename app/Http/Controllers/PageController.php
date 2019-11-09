<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //in ra trang chính
    public function getIndex(){
        $slide =Slide::all();
//        dd($slide);
        $new_product= Product::where('new',1)->paginate(4);
//            dd($new_product);

//        return view('page.trangchu',['slide'=>$slide]);

        $sanphamkhuyenmai =Product::where('promotion_price','<>',0)->paginate(8);
        return view('page.trangchu',compact('slide','new_product','sanphamkhuyenmai'));
    }


    public function getTypeSanPham($type){
        $sptheoloai = Product::where('id_type',$type)->get();
        $spkhac = Product::where('id_type','<>',$type)->paginate(3);
        $typesp = ProductType::all();
        $tensp = ProductType::where('id',$type)->first();
      return view('page.loaisanpham',compact('sptheoloai','typesp','spkhac','tensp'));

    }

    //lay chi tiet tung san pham
    public function chitietsanpham(Request $request){
//        dd($request);
        $sanpham = Product::where('id',$request->id)->first();
        $sanphamtuongtu = Product::where('id_type',$sanpham->id_type)->paginate(3);
//        dd($sanphamtuongtu);
        return view('page.chitietsanpham',compact('sanpham','sanphamtuongtu'));

    }


    public function getSanPham(){
        return view('page.sanpham');
    }
    public function getLienHe(){
        return view('page.lienhe');
    }
    public function getGioiThieu(){
        return view('page.gioithieu');
    }
//    public function hasmany(){
//
//
//            $son = ProductType::find(2)->product()->get();
//            dd($son);
//
//    }

}
