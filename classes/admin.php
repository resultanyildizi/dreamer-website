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
    
  }
  ?>