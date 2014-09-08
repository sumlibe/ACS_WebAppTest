<?php

class Controller_Memo extends Controller_Rest
{
	protected $format = 'json';

	public function get_read()
	{
		$memos = Model_Memo::find_all();
		$this->response($memos);
	}

	public function get_read_backend()
	{

        // APIのトークン
        $token = '';

        // Request_Curlを生成
        // http://fuelphp.jp/docs/1.7/classes/request/curl.html
        $curl = \Request::forge('http://192.168.10.11/memo/read', 'curl');

        // HTTPメソッドを指定
        $curl->set_method('get');

        // パラメータを設定
        $curl->set_params(array('token' => $token));

        // 実行
        // $responseには、Responseインスタンスが入る
        $response = $curl->execute()->response();

        // レスポンスコードチェック
        if ($response->status == 200)
        {
            // Formatクラスを利用して、JSONからPHPの配列に変換
            // http://fuelphp.com/docs/classes/format.html
            $data = \Format::forge($response->body,'json')->to_array();

            // 中身をチェック
            // var_dump($data);
			$this->response($data);
        }
	}

	public function post_write()
	{
		$memo = Input::post('memo');
		Model_Memo::forge(['memo' => $memo])->save();
	}

}
