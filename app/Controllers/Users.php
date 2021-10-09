<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function showRegister()
    {
        echo view('templates/header');
        return view('users/register');
    }

    public function handleRegister()
    {
        $userModel = new UserModel();

        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $userID = substr(str_shuffle($str_result),
            0, 15);
        $data = array(
            'userID' => $userID,
            'fname' => $this->request->getVar('registerFname'),
            'lname' => $this->request->getVar('registerLname'),
            'gender' => $this->request->getVar('registerGender'),
            'email' => $this->request->getVar('registerEmail'),
            'pass' => $this->request->getVar('registerPass')
        );

        $userModel->insert($data);

        return $this->response->redirect(site_url('/users/showUsers'));
    }

    public function showLogin()
    {
        echo view('templates/header');
        return view('users/login');
    }
    public function handleLogin()
    {
        $session = session();

        $email = $this->request->getVar('loginEmail');
        $pass = $this->request->getVar('loginPass');

        $userModel = new UserModel();

        $result = $userModel->verifyLogin($email, $pass);

        if (!empty($result) && count($result) > 0) {
            print_r($result);
            foreach ($result as $row) {
                $authArray = array(
                    'userID' => $row->userID,
                    'First Name' => $row->fname,
                    'Last Name' => $row->lname,
                    'Email Address' => $row->email,
                    'is_authenticate_user' => TRUE,
                );


                $session->set('key_generate', TRUE);
                $session->set('userInfo', $authArray);
                $session->set('greetname', $row->fname);

            }
            return redirect('users/currentUser');
        }
        else {
        // MEANING NOT AUTHENTICATED
        }
        ;
    }
    public function currentUser()
    {
        if (!isset($_SESSION['key_generate']) || $_SESSION['key_generate'] == false) {

            return redirect('users/login');
        }
        else {
            return redirect('/');
        }
    }
    public function profile()
    {

    }

    public function showUsers()
    {

        echo "I'm Showing Accounts";
        $userModel = new UserModel();
        $response['users'] = $userModel->getUsers();

        foreach ($response['users'] as $value) {
            print_r($value);
        }
    }
    public function login()
    {

    }
    public function logout()
    {
        $session = session();
        $session->remove('key_generate');
        $session->remove('userInfo');
        $session->destroy();
        return redirect('users/login');
    }
}

?>