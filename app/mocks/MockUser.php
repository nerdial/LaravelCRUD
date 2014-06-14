<?php

class MockUser {

    public static $schema = array(
        "id"       =>   "digit|index|show",
        "username" =>   "text|index|show|create|edit",
        "password" =>   "password|show|create",
        "email"    =>   "email|create|edit"
    );

    public static $resourceName = "UserController";
    public static $viewFolderName = "user";
    public static $modelName = "User" ;
    public static $validation = true;

}

