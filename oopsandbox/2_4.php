<?php

// Define a Class

class User {
  // Properties
  public $name;
  public $age;

  // Constructor (after php 5)
  public function __construct($name, $age) {
    // Magic constant __CLASS__, predefined by php
    echo 'Class ' . __CLASS__ . ' instantiated...' . '<br>';
    $this->name = $name;
    $this->age = $age;
  }

  // Destructor, called when references to the object exist
  // Used for cleanup, closing connections to database(s), etc.
  public function __destruct() {
    echo 'In descructor ...' . '<br>';
  }


  // Methods
  public function sayHello() {
    return $this->name . ' Says Hello';
  }
}

// Instantiate a user object from the user class
$user1 = new User('Brad', 36);
echo $user1->name . ' is ' . $user1->age . ' years old.' . '<br>';

// Instantiate another user object from the user class
$user2 = new User('Sarah', 25);
echo $user2->name . ' is ' . $user2->age . ' years old.' . '<br>';




?>
