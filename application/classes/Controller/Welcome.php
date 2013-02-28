<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$splash = View::factory('splash')->render();
		$this->response->body($splash);
	}

} // End Welcome
