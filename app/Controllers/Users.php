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


    public function handleRegister()
    {
        // SERVER SIDE FORM VALIDATION
        // $validate = $this->validate([
        //     'registerFname' => [
        //         'label' => 'First Name',
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => 'Please Enter Your First Name',
        //         ]
        //     ],
        //     'registerLname' => [
        //         'label' => 'Last Name',
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => 'Please Enter Your Last Name',
        //         ]
        //     ],
        //     'registerGender' => 'required',
        //     'registerEmail' => [
        //         'label' => 'Email',
        //         'rules' => 'required|valid_email',
        //         'errors' => [
        //             'required' => 'Please Enter a Valid Email Address',
        //             'valid_email' => 'Please enter a valid email address.'
        //         ]
        //     ],
        //     'registerPass' => [
        //         'label' => 'Password',
        //         'rules' => 'required|min_length[5]|alpha_numeric',
        //         'errors' => [
        //             'required' => 'Please Enter a Valid Password',
        //             'min_length' => 'Password must be atleast 5 digits.',
        //             'alpha_numeric' => 'Password must contain alpha numeric'
        //         ]
        //     ],
        //     'registerConfirmPass' => [
        //         'label' => 'Confirm Password',
        //         'rules' => 'required|matches[registerPass]',
        //         'errors' => [
        //             'required' => 'Please Confirm Your Password',
        //             'matches' => 'Confirm password and password must be same.'
        //         ],
        //     ]
        // ]);

        // if ($this->validation->run() == FALSE) {
        //     $validator['success'] = false;
        //     $validator['messages'] = 'Registeration Error';


        //     if (!$validate) {
        //         echo view('templates/header');
        //         return view('users/register', [
        //             'validation' => $this->validator
        //         ]);
        //     }
        // }
        // else {

        $userModel = new UserModel();
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $userID = substr(str_shuffle($str_result),
            0, 15);
        $userRole = 'uFmkUINTY0tNU2W';
        $userActive = 0;

        // HASH PASSWORD
        $hashedPass = password_hash($this->request->getVar('registerPass'), PASSWORD_DEFAULT);
        $data = array(
            'userID' => $userID,
            'fname' => $this->request->getVar('registerFname'),
            'lname' => $this->request->getVar('registerLname'),
            'gender' => $this->request->getVar('registerGender'),
            'email' => $this->request->getVar('registerEmail'),
            'pass' => $hashedPass,
            'roleID' => $userRole,
            'isDeleted' => $userActive
        );
        $userModel->insert($data);
        // $validator['success'] = true;
        // $validator['messages'] = 'Successfully Registered';
        if ($this->response->getStatusCode() == 200){
            $session = session();
            $session->setFlashdata('status', 'success');
            $session->setFlashdata('message', 'Successfully Registered');


        }else if($this->response->getStatusCode() == 404){

        }
        // BEFORE THIS DISPLAY SUCCESS MESSAGE
        // return $this->response->redirect(site_url('/users/login')); 
    // }
    }

    // HANDLE LOGIN FUNCTIONS
    public function handleLogin()
    {
        $session = session();

        $email = $this->request->getVar('loginEmail');
        $pass = $this->request->getVar('loginPass');

        // $checkHashed = 
        $userModel = new UserModel();

        $result = $userModel->verifyLogin($email, $pass);

        // if (!empty($result) && count($result) > 0) {
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
            return $this->response->redirect(site_url('/'));
        // }
        // else {
        //     // MEANING NOT AUTHENTICATED
        //     echo view('templates/header');
        //     return view('users/login');
        // }
        // ;
    }

    // public function loggedInUser()
    // {
    //     if (!isset($_SESSION['key_generate']) || $_SESSION['key_generate'] == false) {

    //         return redirect('users/login');
    //     }
    //     else {
    //         return redirect('/');
    //     }
    // }
    // HANDLE LOGOUT FUNCTIONS
    public function logout()
    {
        $session = session();
        $session->remove('key_generate');
        $session->remove('userInfo');
        $session->destroy();
        return redirect('users/login');

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



}

?>