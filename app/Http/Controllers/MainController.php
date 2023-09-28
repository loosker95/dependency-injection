<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UsersRepository;
use App\Repositories\AccountRepository;
use App\Http\Controllers\SecondController;

use App\Http\Controllers\BindController;


class MainController extends Controller
{
    private $users; 
    private $account;
    private $bind;

    public function __construct(UsersRepository $users, AccountRepository $account, BindController $bind){
        $this->users = $users;
        $this->account = $account;
        $this->bind = $bind;
    }

    public function index(Request $request){
        // // Option 1 get data from other controller
        // $second = new SecondController();
        // $data = $second->importFunc();
        // // Option 2 get data from other controller
        // $dataTwo = (new SecondController())->importFunc();

        $list = $this->users->getUsers();
        $all = $this->account->accountInfo();
        $instance = (new UsersRepository())->getUsers();


        // $dataFromBind = $this->bind->Hello();
        // dd($instance);
        $request->session()->put('name', 'Fabienlk');

        return view('welcome')->with('data', $instance);
    }

    //method injection
    // public function index(UsersRepository $users){
    //     $list = $users->getUsers();
    //     dd($list);
    // }
}
