<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function index(){
        return $this->response->array('欢迎来到my-cloud');
    }
}
