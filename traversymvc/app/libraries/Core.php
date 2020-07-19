<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params
   */
class Core {
  // 'Pages' is the default controller
  protected $currentController = 'Pages';
  // 'index' is the default method
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct() {
    //print_r($this->getUrl());
    $url = $this->getUrl();

    // Look in controllers for first value
    // Everything gets routed into index.php, so define path as if we are in
    // index.php
    if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      // If exists, then set as current controller.  If does not exist,
      // then the current controller will remain, i.e. the default controller Pages
      $this->currentController = ucwords($url[0]);
      // unset the 0 index
      unset($url[0]);
    }

    // Require the controller
    require_once '../app/controllers/' . $this->currentController . '.php';

    // Instantiate the controller class
    $this->currentController = new $this->currentController;

    // Check for second part of url
    if (isset($url[1])) {
      // Check to see if method exists in controller
      if (method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        // unset the 1 index
        unset($url[1]);
      }
    }

    // echo $this->currentController;
    echo nl2br("Current Method: " . $this->currentMethod . "\n");

    // Get parameters
    $this->params = $url ? array_values($url) : [];

    // Call a callback with array of params.  This invokes the current method
    // on the current controller with the specified parameters.
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  }

  public function getUrl() {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      // Break URL into an array
      $url = explode('/', $url);
      return $url;
    }
  }
}







?>
