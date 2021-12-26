<?php

namespace app\index\controller;

use app\index\model\User as UserM;

class User{
    /**
     * php console.php /index/User/index
     */
    public function index( ) {
         
       
        $dt =  UserM::w('id','>',0)->ga();
        print_r($dt);
        
    }
}


