<?php

namespace Fuel\Tasks;

class Webapi
{
	public static function run($speech = null)
	{
        // APIのトークン
        $token = '';

        // Request_Curlを生成
        // http://fuelphp.jp/docs/1.7/classes/request/curl.html
        $curl = \Request::forge('http://192.168.10.10/memo/read', 'curl');

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
            var_dump($data);
        }
	}
}

