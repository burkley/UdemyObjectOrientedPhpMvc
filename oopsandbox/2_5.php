<?php

// Define a Class

class User {
  // Properties
  private $name;
  private $age;

  // Constructor (after php 5)
  public function __construct($name, $age) {
    // Magic constant __CLASS__, predefined by php
    //echo 'Class ' . __CLASS__ . ' instantiated...' . '<br>';
    $this->name = $name;
    $this->age = $age;
  }

  // Can do an explicit getter if so choose
  public function getName() {
    return $this->name;
  }

  // Can do an explicit setter if so choose
  public function setName($name) {
    $this->name = $name;
  }

  // __get MAGIC Method
  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  // __set MAGIC METHOD
  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
    return $this;
  }

  // Destructor, called when references to the object exist
  // Used for cleanup, closing connections to database(s), etc.
  public function __destruct() {
    //echo 'In descructor ...' . '<br>';
  }
}

// Instantiate a user object from the user class
$user1 = new User('Brad', 36);
echo $user1->__get('name') . ' is ' . $user1->__get('age') . ' years old.' . '<br>';
$user1->__set('age', 37);
$user1->__set('name', 'Sarah')->__set('age', 28);
echo $user1->__get('name') . ' is ' . $user1->__get('age') . ' years old.' . '<br>';


// Instantiate another user object from the user class
// $user2 = new User('Sarah', 25);
// echo $user2->name . ' is ' . $user2->age . ' years old.' . '<br>';




?>
