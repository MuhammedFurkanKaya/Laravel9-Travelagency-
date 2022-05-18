<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function faq()
    {
        $setting= Setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist,

        ]);
    }

    public function storemessage(Request $request)
    {
       // dd($request);
        $data= new Message();
        $data->name= $request->input('name');
        $data->email= $request->input('email');
        $data->phone= $request->input('phone');
        $data->subject= $request->input('subject');
        $data->message= $request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank You.');
    }

    public function storecomment(Request $request)
    {
         //dd($request); //Check your values
        $data= new Comment();
        $data->user_id= Auth::id(); //Logged in user id
        $data->product_id= $request->input('product_id');
        $data->subject= $request->input('subject');
        $data->review= $request->input('review');
        $data->rate= $request->input('rate');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('product',['id'=>$request->input('product_id')])->with('success','Your comment has been sent, Thank You.');
    }


    public function product($id)
    {

        $data= Product::find($id);
        $images= DB::table('images')->where('product_id',$id)->get();
        $reviews=Comment::where('product_id',$id)->where('status','True')->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews
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

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
