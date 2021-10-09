<?php

namespace App\Controllers;

class RegisterController extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('users/register');
    }

    // public function show_register()
    // {
    //     echo view('templates/header');
    //     echo view('users/register');
    // }
    public function register_data()
    {
        $data =
            array(
            'fname' => $this->input->post('registerFname'),
            'lname' => $this->input->post('registerLname'),
            'gender' => $this->input->post('registerGender'),
            'email' => $this->input->post('registerEmail'),
            'password' => $this->input->post('registerPassword'),
            'confirmPass' => $this->input->post('registerConfirmPass')
        );

        print_r($data);
    }
}

?>