<?php defined('SYSPATH') or die('No direct script access.');

class Csrf_Exception extends Kohana_Csrf_Exception
{
  public function get_response()
  {
    $view = View::factory('errors/csrf');
    $view->body = 'some html here';
    $response = Response::factory()->status(500)
                                   ->body($view->render());
    return $response;                                           
  }
}