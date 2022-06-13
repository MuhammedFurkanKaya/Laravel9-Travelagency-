<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Packages;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPackagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= Packages::all();
        return view('admin.packages.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Category::all();
        return view('admin.packages.create',[
            'data' => $data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Packages();
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->day = $request->day;
        $data->number_people = $request->number_people;
        $data->tax = $request->tax;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/packages');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function show(Packages $packages,$id)
    {
        //
        $data= Packages::find($id);
        return view('admin.packages.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function edit(Packages $packages, $id)
    {
        //
        $data= Packages::find($id);
        $datalist= Category::all();
        return view('admin.packages.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packages $packages,$id)
    {
        //
        $data= Packages::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->day = $request->day;
        $data->number_people = $request->number_people;
        $data->tax = $request->tax;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packages $packages,$id)
    {
        //
        $data=Packages::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/packages');
    }
}
