<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Base 
{	
	public function action_index()
	{
		$view = View::factory('dashboard/index');
		$this->response->body($view->render());
	}

	public function action_update()
	{
		Csrf::check($this->request->post());
		$new_email = $this->request->post('email', null);

		// just for this tutorial!
		$user = Auth::instance()->get_user();
		$user->email = $new_email;
		$user->save();

		//cheers!
		$view = View::factory('main');
		$view->body = '<h1>email updated successfully<h1>';
		$this->response->body($view->render());
	}
} 
