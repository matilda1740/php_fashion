<?php

namespace App\Models;
use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $db;
    protected $table = 'category';
    protected $allowedFields = ['categoryID', 'categoryName', 'isDeleted'];

    function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }

    public function getCategories()
    {
        $query = $this->db->query('SELECT * FROM ' . $this->table);
        return $query->getResult();
    }

}
?>