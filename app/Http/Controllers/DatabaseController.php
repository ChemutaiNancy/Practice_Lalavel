<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    //
    public function database(){
        // getting data from the database without using query; ->find only used in id;
        // $users=DB::table('user_info')->count();

        // delete function
        // $users=DB::table('user_info')
        // ->where('name', 'NANCY')
        // ->delete();

        // insert function
        // $users=DB::table('company')
        // ->insert([
        //     'id'=>'2',
        //     'company'=>'Vosafone',
        //     'user_id'=>'2',
        // ]);

        // update function
        // $users=DB::table('company')
        // ->where('id', '2')
        // ->update([
        //     'company'=>'Vodafone'
        // ]);

        // Joining tables
        $users=DB::table('user_info')
        ->join('company','user_info.id','company.user_id')
        ->get();
        print_r($users);

        // ->where('name','NANCY')
        // ->get();
        // print_r($users);
        // $user=DB::select('select * from user_info');
        // print_r($user);
        // return $user;
        // echo "We are here";
    }
}
