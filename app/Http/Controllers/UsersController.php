<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel;
use Response;
class UsersController extends Controller
{
    public function AllUsers()
    {
    	$model = new UsersModel();
    	$result = $model->getallrecords();
    	$message = 'No data Found';
    	if(count($result)>0)
    	{
    		return Response::json(array(
                    'code'      =>  200,
                    'message'   =>  $result
                ), 200);
    	}
    	else
    	{
    		
    		return Response::json(array(
                    'code'      =>  300,
                    'message'   =>  $message
                ), 300);

    	}

    }
}
