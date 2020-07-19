<?php

/*
 * Here is class user
 */
class User {
  // Properties
  public $name;
  public $age;
  // Here is a static variable
  public static $minPassLength = 6;

  // Here is a static method that references the static variable
  public static function validatePass($pass) {
    // Notice the mechanism, i.e. self::$minPassLength
    // Use the self construct to reference a static variable
    if (strlen($pass) >= self::$minPassLength) {
      return true;
    } else {
      return false;
    }
  }
}


$password = 'Hello';
// Now the :: construct is used to reference the static class method validatePass
if (User::validatePass($password)) {
  echo 'Password is valid';
} else {
  echo 'Password is not valid';
}

?>
