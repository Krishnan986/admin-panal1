<?php

class User extends Main {

    public $id;
    public $name;
    public $image;
    public $email;
    public $password;
    public $phone;
    
    

    public static function verify_user($username, $password){
        $array = self::query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        return array_shift($array);
    }

}

?>