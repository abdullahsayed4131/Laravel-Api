<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class UsersModel extends Model
{
    public function getallrecords()
    {
    	$result = DB::table('users')->get();
    	return $result;
    }
}
