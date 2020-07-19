<?php

/*
 * Base Controller
 * Loads the models and views.
 */
class Controller {

  // Load model
  public function model($model) {
    // Require model file
    require_once '../app/models/' . $model . '.php';

    // Instantiate model
    return new $model();
  }

  // Load view
  public function view($view, $data = []) {
    // $data will represent dynamic values we can pass in through our views

    // Check for view file
    $temp = '../app/views/' . $view . '.php';
    if (file_exists($temp)) {
      require_once $temp;
    } else {
      // The view does not exists
      die('View does not exist.');
    }
  }
}








?>
