<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('This is the future home of Ninjaclip!');
	}

} // End Welcome
