<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{

    protected $table = 'product';
    protected $allowedFields = [
        'productID',
        'productName',
        'productDescription',
        'productColor',
        'unitPrice',
        'availableQty',
        'subcategoryID',
        'isDeleted',
        'createdAt'
    ];

    protected $db;

    function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function getProducts()
    {
        $query = $this->db->query('SELECT * FROM ' . $this->table);
        return $query->getResult();
    }

}

?>