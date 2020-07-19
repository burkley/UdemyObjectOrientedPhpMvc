<?php

// Define a Class

class User {
  // Properties, this one has a default value
  public $name = 'Brad';

  // Methods
  public function sayHello() {
    return $this->name . ' Says Hello';
  }
}

// Instantiate a user object from the user class
$user1 = new User();
echo $user1->name;
echo '<br>';
echo $user1->sayHello();
?>
