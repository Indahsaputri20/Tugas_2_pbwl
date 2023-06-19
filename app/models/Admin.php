<?php

namespace App\Models;

use App\Core\Model;

class Admin extends Model
{
      public function simpan()
      {
        $admin_name = $_POST['admin_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO tb_admin (admin_name, username, password)
        VALUES (:admin_name, :username, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":admin_name", $admin_name);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_admin WHERE admin_id=:admin_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":admin_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $admin_id = $_POST['admin_id'];
            $admin_name = $_POST['admin_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "UPDATE tb_golongan
            SET admin_name=:admin_name, username=:username, password=:password
            WHERE admin_id=:admin_id";
        
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":admin_id", $admin_id);
            $stmt->bindParam(":admin_name", $admin_name);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
      }

      public function delete($id)
      {
            $query = "DELETE FROM tb_admin WHERE admin_id=:admin_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":admin_id", $id);
            $stmt->execute();
      }
}