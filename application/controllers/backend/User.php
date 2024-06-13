<?php

class User extends MY_Controller{
    public function profile() {

        $notif = null;
        $user= \Orm\User::first();

        if($this->input->post()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username == '' || $password == ''){
                $notif = "Username dan Password Tidak Boleh Kosong";
            }else{
                $user->username = $username;
                $user->password = $password;
                $user->save();

                $notif = "Username dan Password Berhasil Diganti";
            }
        }
        view('backend.User.profile',['user' => $user, 'notif' => $notif]);
    }
}