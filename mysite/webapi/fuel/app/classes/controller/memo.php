<?php

class Controller_Memo extends Controller_Rest
{
	protected $format = 'json';

	public function get_read()
	{
		$memos = Model_Memo::find_all();
		$this->response($memos);
	}

	public function post_write()
	{
		$memo = Input::post('memo');
		Model_Memo::forge(['memo' => $memo])->save();
	}

}
