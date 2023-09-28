<?php

namespace App\Repositories;


class UsersRepository{

    public function getUsers(){
        return ([
            'id' => 001,
            'name' => 'Louce Kerdely Fabien',
            'country' => 'Vietnam',
            'city' => 'Hanoi',
            'profession' => 'Software Developer'  
        ]);
    }

}
