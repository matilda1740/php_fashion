<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

use CodeIgniter\API\ResponseTrait;

class Products extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $db = db_connect();
        $productModel = new ProductModel();
        $products = $productModel->getProducts();
        // return $this->respond($products);
        $data = ['products'=>json_encode($products)];
      
        echo view('templates/header');
        return view('pages/products', $data);
        // return view('sample', $data);
        // Display
        // echo "<pre>";
        // print_r($products);
        // echo "</pre>";
    }

    public function addToCart($productID){

    }

    public function createOrder(){
        
    }

}
