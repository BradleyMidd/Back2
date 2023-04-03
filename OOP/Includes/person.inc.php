<?php

class Info
{

    public $username;
    protected $password;

    function user($username)
    {
        $this->username = $username;
    }

    function pass($password)
    {
        $this->password = sha1($password);
    }

}


?>