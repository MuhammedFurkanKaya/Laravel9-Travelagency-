<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $page='home';
        $sliderdata=Product::limit(6)->get();
        $productlist1=Product::limit(6)->get();
        $setting= Setting::first();
       return view('home.index',[
           'page'=>$page,
           'setting'=>$setting,
           'sliderdata'=>$sliderdata,
           'productlist1'=>$productlist1
       ]);
    }

    public function about()
    {

        $setting= Setting::first();
        return view('home.about',[
            'setting'=>$setting,

        ]);
    }

    public function references()
    {

        $setting= Setting::first();
        return view('home.references',[
            'setting'=>$setting,

        ]);
    }

    public function contact()
    {

        $setting= Setting::first();
        return view('home.contact',[
            'setting'=>$setting,

        ]);
    }


    public function product($id)
    {

        $data= Product::find($id);
        $images= DB::table('images')->where('product_id',$id)->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images
        ]);
    }
    public function test($id,$name)
    {
        return view('home.test',
            [
                'id'=>$id,
                'name'=>$name
            ]);
       /* echo "Id Number: ",$id;
        echo "Name: ",$name;
        for($i=1;$i<=$id;$i++){
            echo "<br> $i-$name";
        }
       */
    }
}
