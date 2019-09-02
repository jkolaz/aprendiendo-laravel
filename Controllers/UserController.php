<?php
namespace Controllers;
use Models\Users;

class UserController
{
    public function usersList() {
        $data = ['STATUS' => 1, 'USER' => 1 ];

        $xData = Users::listUser( $data );

        return view('user.list', ['data' => $xData] );
    }
}
