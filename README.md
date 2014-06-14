laravel-crud
============

a simple powerful artisan command to create crud for laravel in less than 5 mintues
----

> copy commands/crud/ dir to your laravel : app/commands/

> open and edit app/start/artisan.php

add these codes to end of the file

```sh
<?php
Artisan::add(new CrudMock);
Artisan::add(new CrudMake);
```
>  this registers artisan command to laravel


then you should create your mock in order to build your crud

```sh
php artisan crud:mock user
```

> this command creates a mock for user Model

> you can find it in app/mocks/MockUser.php 

in order to create Multiple mocks you can run this command

```sh
php artisan crud:mock user,company,category
```

> mocks must be seprated with ","

so you have the mock , let's take look at it


```sh
<?php
class MockUser {

    public static $schema = array(
        "id"               => "digit|index|show",
        "username"         => "text|index|create|edit|show",
        "password"         => "password|create|hash",
        "password_confirm" => "password|create|deny",
        "email"            => "email|create|edit",
        "profile_picture"  => "file|create|edit",
        "address"          => "textarea|create|edit"
    );

    public static $resourceName = "UserController";
    public static $viewFolderName = "user";
    public static $modelName = "User" ;
    public static $validation = true;
}

```
in $schema property you should define your table's field

in order to create your crud thruogh this file run this command 

```sh
php artisan crud:make

```

> this command looks for files in app/mocks/* and get their config and create Controller and View files




