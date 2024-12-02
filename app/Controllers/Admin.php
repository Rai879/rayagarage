<?php

namespace App\Controllers;
class Admin extends BaseController
{
    public function dashboard() 
    {
        $data = ['tilte' => 'Dashboard'];
        return view('dashboard',$data);
    }
}