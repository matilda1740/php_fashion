<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function view($page = 'home')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        // $data['css'] = $this->config->item('css');
        // $this->load->helper('url');
        // echo view('templates/header', $data);
        echo view('templates/header');
        echo view('templates/main');
        echo view('pages/' . $page);
    }
    public function success()
    {
        return view('templates/formsuccess');
    }
    public function showRegister()
    {
        echo view('templates/header');
        return view('users/register');
    }
    // DISPLAY LOGIN PAGE
    public function showLogin()
    {
        echo view('templates/header');
        return view('users/login');
    }

}
