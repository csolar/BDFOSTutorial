<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller
{
  public function before()
  {
    parent::before();
    $user = Auth::instance()->get_user();
    if(is_null($user))
    {
      $this->redirect(Route::url('login'), 302);
    }
  }
}