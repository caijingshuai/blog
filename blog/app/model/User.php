<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class User extends Model
{
    //
    public function sel($id){

   return  $users = DB::select('select *  from user where  user_id ='.$id);

    }
}
