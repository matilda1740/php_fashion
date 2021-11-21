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
    // public function showProducts()
    // {
    //     echo view('templates/header');
    //     return view('pages/products');
    // }
    public function showWishlist()
    {
        echo view('templates/header');
        return view('pages/wishlist');
    }
    public function showCart()
    {
        echo view('templates/header');
        return view('pages/cart');
    }
    public function showCheckout()
    {
        echo view('templates/header');
        return view('pages/checkout');
    }
    public function showProfile()
    {
        echo view('templates/header');
        return view('pages/profile');
    }
}
