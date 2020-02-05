<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\HomeAnalytics;
use App\Models\Home;
class controllerForHome extends Controller
{
    //
    public function updateHome(Request $request)
    {
        $id = $request->id;
        $this->validate($request,['title'=>'required',
        'price'=>'required','specification'=>'required','bedroom'=>'required',
        'bathroom'=>'required','garage'=>'required','status'=>'required']);
            $home=Home::find($id);
            $home->title=$request->input('title');
            $home->specification=$request->input('specification');
            $home->price=$request->input('price');
            if(!empty($request->input('image'))){
                $home->image=$request->input('image');
            }
            $home->bedroom=$request->input('bedroom');
            $home->bathroom=$request->input('bathroom');
            $home->garage=$request->input('garage');
            $home->status=$request->input('status');
            $home->save();
            return ["updated successfully"];
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function updateClick(Request $request)
    {
        $id = $request->id;
        //
       HomeAnalytics::Where('home_id',$id)->increment('click',1);
        return ["click counted"];

    }
    // public function updateImpression(Request $request, $id)
    // {
    //     //
    //     $cdate = date('Y-m-d');
    //     $isExist = HomeAnalytics::where('id',$id)->whereDate('created_at',$cdate)->get();
    //     $count = $isExist->count();
    //     if ($count>0) {
    //         $home = new HomeAnalytics;
    //         $home->impression = $request->input('impression');
    //         $home->save();
    //     }
    //     else {}
    // }

 // return Homes infoormation
 public function getHomes(){
    $homes = Home::all();
    return response()->json($homes);
  
}       

}
