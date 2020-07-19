<?php

/*
 * Class Pages is the default controller
 */
class Pages extends Controller {
  public function __construct() {
    echo nl2br("\nClass " . get_class() . ", is loaded.\n");
    echo nl2br("\n" . __FUNCTION__ . "\n");
    echo nl2br("\n" . __METHOD__ . "\n");
    $this->postModel = $this->model('Post');
  }

  /*
   * Method index is the default method
   */
  public function index() {
    // echo nl2br("__FUNCTION__ " . __FUNCTION__ . "\n");
    // echo nl2br("__METHOD__ " . __METHOD__ . "\n");
    $posts = $this->postModel->getPosts();
    $data = [
      'Title' => 'Welcome',
      'posts' => $posts
    ];
    $this->view('pages/index', $data);
  }

  public function about() {
    $data = [
      'Title' => 'About Us'
    ];
    $this->view('pages/about', $data);
  }

}

?>
