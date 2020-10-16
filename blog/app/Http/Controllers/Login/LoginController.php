<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\User;
class LoginController extends Controller
{
    public function login(Request $data){





    $a = $data->header('token');
    print_r($a);
        $users = new User();
        echo json_encode($users->sel($data->id));
    }
}
