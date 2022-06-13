<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Packages;
use App\Models\Reservation;
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
        $sliderdata=Packages::limit(5)->get();
        $packageslist1=Packages::limit(5)->get();
        $setting= Setting::first();
       return view('home.index',[
           'page'=>$page,
           'setting'=>$setting,
           'sliderdata'=>$sliderdata,
           'packageslist1'=>$packageslist1
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
        $data->packages_id= $request->input('packages_id');
        $data->subject= $request->input('subject');
        $data->review= $request->input('review');
        $data->rate= $request->input('rate');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('packages',['id'=>$request->input('packages_id')])->with('success','Your comment has been sent, Thank You.');
    }

    public function storereservation()
    {
      /*  // dd($request);
        $data= new Reservation();
        $data->user_id= Auth::id();
        $data->packages_id= $request->input('packages_id');
        $data->start_date= $request->input('start_date');
        $data->person= $request->input('person');
        $data->price= $request->input('price');
        $data->amount= $request->input('amount');
        $data->note= $request->input('note');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('packages',['id'=>$request->input('packages_id')])->with('info','Your reservation request has been received, wait for confirmation.');
    */
        $setting= Setting::first();
        return view('home.storereservation',[
            'setting'=>$setting,

        ]);

    }

    public function storereservationComplate(Request $request){
        $data= new Reservation();
        $data->adres= $request->input('adres');
        $data->telefon= $request->input('telefon');
        $data->mesaj= $request->input('mesaj');
        $data->save();

        return redirect()->route('storereservation')->with('info','Your reservation request has been received, wait for confirmation');
    }


    public function packages($id)
    {

        $data= Packages::find($id);
        $images= DB::table('images')->where('packages_id',$id)->get();
        $reviews=Comment::where('packages_id',$id)->where('status','True')->get();
        return view('home.packages',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews
        ]);
    }
    public function reservation($id)
    {

        $data= Reservation::find($id);
        $images= DB::table('images')->where('packages_id',$id)->get();
        $reviews=Comment::where('packages_id',$id)->where('status','True')->get();
        return view('home.packages',[
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
