<?php
/**
 * Created by PhpStorm.
 * User: kjesse
 * Date: 8/24/16
 * Time: 3:13 PM
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}



?>