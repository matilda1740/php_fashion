<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'user';
    protected $db;
    protected $allowedFields = [
        'userID',
        'fname',
        'lname',
        'gender',
        'email',
        'pass'
    ];
    function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }
    public function getUsers()
    {
        $query = $this->db->query('SELECT * FROM ' . $this->table);
        $users = $query->getResult();
        return $users;
    }
    public function verifyLogin($email, $pass)
    {
        $query = $this->db->query(
            "SELECT * FROM " . $this->table . " WHERE email= '$email' AND pass='$pass';"
        );

        $userDetails = $query->getResult();
        return $userDetails;
    }
}

?>