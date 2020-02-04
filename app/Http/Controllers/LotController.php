<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Lot;
use App\Models\HomeAnalytics;
use App\Models\LotAnalytics;
use App\Models\Home_Lot_R;

class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = DB::select("Select * From homes order by id");
        $lots = DB::select("Select * From lots order by id");
        return view('admin')->with('lots',$lots)->with('homes',$homes);
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
        $cdate = date('Y-m-d');
        $click = LotAnalytics::where('lot_id', '=', $id)->whereDate('created_at', '=', $cdate)->get();
        $ClickCount = $click->count();
        if($ClickCount==0)
        {
            $lot=new LotAnalytics;
            $lot->click=$request->input('click');
            $lot->lot_id=$id;
            $lot->impression=$request->input('impression');
            $lot->save();
            $homes=Home_Lot_R::where('lot_id',$id)->get();
            foreach($homes as $home)
            {
            $home =new HomeAnalytics;
            $home->home_id=$home->home_id;
            $home->click=$request->input('click');
            $home->impression=$request->input('impression');
            $home->save();
            }
    
        }
        else
        {
            $lot=LotAnalytics::find($id);
            $lot->click=$request->input('click');
            $lot->save();
            $homes=Home_Lot_R::where('lot_id',$id)->with('home')->get();
            foreach($homes as $home)
            {
            $home =HomeAnalytics::find($home->home_id);
            $home->home_id=$home->home_id;
            $home->impression=$request->input('impression');
            $home->save();
            }
        }
       
    }
    public function updateImpression(Request $request)
    {
        $cdate = date('Y-m-d');
        $impression = LotAnalytic::where('id', '=', $id)->whereDate('created_at', '=', $cdate)->get();
        $impressionCount = $click->count();
        if($impressionCount==0)
        {
            $lot=new LotAnalytic;
            $lot->click=$request->input('click');  
            $lot->impression=$request->input('impression');
            $lot->save();
        }
        else
        {
            $lot=LotAnalytics::find($id);
            $lot->impression=$request->input('impression');
            $lot->save();
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
}
