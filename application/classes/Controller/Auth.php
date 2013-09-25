<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller
{
  public function action_login()
  {
    if($this->request->method() == Request::POST)
    {
      $post = $this->request->post();
      $success = Auth::instance()->login($post['username'], $post['password']);
       
      if ($success)
      {
          // Login successful, send to app
        $this->redirect('dashboard');
      }
    }
    $view = View::factory('login');
    
    $this->response->body($view->render());
  }
}