<?php
    require_once("data_access.php");
    class User {
        public static function Login($email, $password) {
            $query = "select * from users where email = '$email' and password = '$password'";
            $result = DataAccess::ExecuteQuery($query);

            if(sizeof($result) > 0)
                return $result[0];
            else
                return null;
        }
    }




?>