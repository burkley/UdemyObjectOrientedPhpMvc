<?php

/*
 * Here is class user
 */
class User {
  // Properties
  protected $name;
  protected $age;

  // Constructor (after php 5)
  public function __construct($name, $age) {
    // Magic constant __CLASS__, predefined by php
    //echo 'Class ' . __CLASS__ . ' instantiated...' . '<br>';
    $this->name = $name;
    $this->age = $age;
  }

  // Destructor, called when references to the object exist
  // Used for cleanup, closing connections to database(s), etc.
  public function __destruct() {
    //echo 'In descructor ...' . '<br>';
  }
}


/*
 * Here is class Customer which extends class User.
 */
class Customer extends User {
  private $balance;

  public function __construct($name, $age, $balance) {
    parent::__construct($name, $age);
    $this->balance = $balance;
  }
  public function pay($amount) {
    return $this->name . ' paid $' . $amount;
  }

  public function getBalance() {
    return $this->balance;
  }
}

// The customer's name is John
// The customer's age is 33
// The customer's balance is 125
$customer1 = new Customer('John', 33, 125);
echo $customer1->pay(100) . '<br>';
echo "Balance is " . $customer1->getBalance() . '<br>';

?>
