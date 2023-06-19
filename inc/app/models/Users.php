<?php

namespace App\Models;

use App\Core\Model;

class Users extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
      public function simpan()
      {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_nama = $_POST['user_nama'];
        $user_aktif = $_POST['user_aktif'];

        $sql = "INSERT INTO tb_users (user_email, user_password, user_nama, user_aktif)
        VALUES (:user_email, :user_password, :user_nama, :user_aktif)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_email", $user_email);
        $stmt->bindParam(":user_password", $user_password);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_aktif", $user_aktif);
        $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $user_id = $_POST['user_id'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
            $user_nama = $_POST['user_nama'];
            $user_aktif = $_POST['user_aktif'];

            $sql = "UPDATE tb_users
            SET user_email=:user_email, user_password=:user_password, user_nama=:user_nama, user_aktif=:user_aktif
            WHERE user_id=:user_id";
        
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":user_email", $user_email);
            $stmt->bindParam(":user_password", $user_password);
            $stmt->bindParam(":user_nama", $user_nama);
            $stmt->bindParam(":user_aktif", $user_aktif);
            $stmt->execute();
      }

      public function delete($id)
      {
            $query = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}