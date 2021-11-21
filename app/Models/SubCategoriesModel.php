<?php

namespace App\Models;
use CodeIgniter\Model;

class SubCategoriesModel extends Model
{
    protected $db;
    protected $table = 'subcategory';
    protected $allowedFields = ['subcategoryID', 'subcategoryName', 'categoryID', 'isDeleted', 'createdAt'];

    function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function getSubCategories()
    {
        $query = $this->db->query('SELECT * FROM ' . $this->table);
        return $query->getResult();
    }

}
?>