<?php

namespace App\Repositories;


class AccountRepository{

    public function accountInfo(){
        return([
            'user_id' => 001,
            'bank' => 'VIB',
            'amount' => '100.000.000',
            'type' => 'saving',
        ]);
    }

}