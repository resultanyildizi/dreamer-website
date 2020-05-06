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
    
     public static function InsertUser($_firstname,$_lastname,$_password,$_email){
       
         $insert_query="insert into users(firstname,surname,password,email,picture_url)".
            "values ('$_firstname','$_lastname','$_password','$_email','asdf')";
          
        DataAccess::ExecuteNonQuery($insert_query);

        }
}


?>