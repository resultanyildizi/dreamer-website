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
       
         $insert_query="insert into users(firstname,surname,password,email,picture_url) ".
            "values('$_firstname','$_lastname','$_password','$_email','asdf') ";
        
        $result = DataAccess::ExecuteNonQuery($insert_query);
        return $result;
        
    }

    public static function UpdateUser($_id, $_firstname, $_lastname, $_password, $_email, $_picture_url) {
        $update_query = "update users set firstname='$_firstname'," . 
                        "surname='$_lastname', password='$_password'," .
                        "email='$_email', picture_url='$_picture_url' where id='$_id' ";

        DataAccess::ExecuteNonQuery($update_query);
    }
}


?>