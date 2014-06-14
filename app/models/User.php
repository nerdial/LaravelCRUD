<?php

class User extends Eloquent {

    public static $rules = array(
      "username" => "required|alpha_dash|min:5|max:20"  ,
      "password" => "required|min:6|max:30"  ,
      "email"    => "required|email"
    );

    public static $updateRules = array(
      "username" => "required|alpha_dash|min:5|max:20"  ,
      "email"    => "required|email"
    );
} 