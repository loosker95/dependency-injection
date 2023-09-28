<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BindController extends Controller
{

    private $second;
    public function __construct(SecondController $second){
        $this->second = $second;
    }
    
    public function Hello(){
        $data = $this->second->importFunc();
        return $data;
        // return 'Hello from bind controller';
    }
}
