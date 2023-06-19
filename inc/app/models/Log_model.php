<?php 
namespace App\Models;

use App\Core\Model;

class Log_model extends Model
{
    public function getUser($username, $password)
    {
        $query = "SELECT * FROM tb_admin WHERE username=:username AND password=:password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        return $this->resultSet($stmt);
    }
}