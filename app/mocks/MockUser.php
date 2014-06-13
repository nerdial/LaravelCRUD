<?php

class MockUser {

    public static $schema = array(
        "id" 				=> "digit|index|show",
        "username"			=> "text|index|show|create|edit",
        "password"  		=> "password|create|hash",
        "confirm_password"  => "password|create|deny",
        "description" 		=> "textarea|show",
        "email"				=> "email|create"
    );

    public static $resourceName = "UserController";
    public static $viewFolderName = "user";
    public static $modelName = "User" ;
    public static $validation = true;

}

