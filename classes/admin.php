<?php
     require_once("data_access.php");
    class Admin {
        public static function Login($email, $password) {
            
            $query = "select * from admin where email = '$email' and password = '$password'";
            $result = DataAccess::ExecuteQuery($query);

            if(sizeof($result) > 0)
                return $result[0];
            else
                return null;
        }

        public static function UpdateAdmin($id, $name, $surname, $password, $picture_url) {
            $query = "update admin set firstname = '$name', surname='$surname', password='$password', picture_url='$picture_url' where id='$id'";

            DataAccess::ExecuteNonQuery($query);
        }
    
  }
  ?>