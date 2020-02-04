<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\HomeAnalytics;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        // return view('admin')->with('homes',$homes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateClick(Request $request, $id)
    {
        //
        $cdate = date('Y-m-d');
        $isExist = HomeAnalytics::where('id', '=', $id)->whereDate('created_at', '=', $cdate)->get();
        $count = $isExist->count();
        if($count==0)
        {
            $home=new HomeAnalytics;
            $home->home_id = $id;
            $home->click=$request->input('click');
            $home->impression=$request->input('impression');
            $home->save();
            return response()->json([
                "message"=>"clicked counted"
            ]);
        }
        else
        {
            $home=HomeAnalytics::find($id);
            $home->click=$request->input('click');
            $home->save();
        }

    }
    public function updateImpression(Request $request, $id)
    {
        //
        $cdate = date('Y-m-d');
        $isExist = HomeAnalytics::where('id',$id)->whereDate('created_at',$cdate)->get();
        $count = $isExist->count();
        if ($count>0) {
            $home = new HomeAnalytics;
            $home->impression = $request->input('impression');
            $home->save();
        }
        else {


        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // return Homes infoormation
    public function getHomes(){
        $homes = Home::all();
        return response()->json($homes);
      
    }       
}
