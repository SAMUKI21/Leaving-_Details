<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LeavingDetasilsController extends Controller
{
    public function viewdata(){
        $leave  = DB::table('leaving')
        ->get();
        return view('pages.leavingdetails')->with('leave', $leave);
    }


      
    public function details(Request $request){
        DB::table('leaving')->insert([
            'leavetype' => $request->Leave ,
             'date' => today(),


            
            
        ]);

       
        
        return redirect('/leavingdetails');
    }
    public function delete($id){
        DB::delete('delete from leaving where id = ?', [$id]);
       return redirect('/leavingdetails');
    }
  
    public function update($id){
        $leavingup = DB::table('leaving')
             ->where('id', '=', $id)->get()->first();
         return view('pages.leavingupdate')->with('leavingup', $leavingup);
     }

     public function leavingUpdate(Request $request){
        DB::update('update leaving set leavetype = ?,date = ?  where id = ?', 
        [$request->new,$request->date,$request->upid]);

      

        return redirect('/leavingdetails');


    }



}
