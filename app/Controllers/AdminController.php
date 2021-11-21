<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('adminViews/sidebar');

    }
    public function dashboard()
    {
        echo view('adminViews/sidebar');
        echo view('adminViews/dashboard');

    }

    public function showOrders()
    {
        echo view('adminViews/sidebar');
        echo view('adminViews/orders');



    }

    public function viewProducts()
    {
        echo view('adminViews/sidebar');
        echo view('adminViews/products/viewProducts');
    }
    public function addProducts()
    {
        echo view('adminViews/sidebar');
        echo view('adminViews/products/addProducts');

    }
}

?>