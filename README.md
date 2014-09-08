ACS_WebAppTest
==============

### ＜事前準備＞
※[Virtualbox](https://www.virtualbox.org/wiki/Downloads)、[Vagrant](https://www.vagrantup.com/downloads.html)は事前にインストールしておいてください。

#### Vagrantプラグインのインストール（インストール済の場合は不要）

```
$ vagrant plugin install vagrant-omnibus
```

#### Bundlerのインストール（インストール済の場合は不要）

```
$ gem install bundler
```

#### 仮想マシン環境の取得（初回のみ）

```
$ git clone git@github.com:sumlibe/ACS_WebAppTest.git
$ cd ACS_WebAppTest
```

#### Gemのインストール（初回のみ）

```
$ bundle install --path vendor/bundle
```

#### サードパーティcookbookの取得（初回のみ）

```
$ bundle exec berks vendor cookbooks
```

### ＜動作確認＞

#### 仮想マシン環境の起動

```
$ vagrant up
```

#### 仮想マシンの起動確認

```
$ vagrant ssh frontend_server
$ vagrant ssh backend_server
```

#### サーバーの動作確認

##### フロントエンドサーバーの動作確認

[FrontEndServer（http://192.168.10.10）](http://192.168.10.10)アクセスしてFuelPHPのトップページを表示

##### フロントエンドサーバーの動作確認（WebAPIの呼び出し）

```
curl http://192.168.10.10/memo/write -d "memo=FrontEnd_Server_test1"
curl http://192.168.10.10/memo/write -d "memo=FrontEnd_Server_test2"
curl http://192.168.10.10/memo/write -d "memo=FrontEnd_Server_test3"
curl http://192.168.10.10/memo/read
```

##### バックエンドサーバーの動作確認

[BackEndServer（http://192.168.10.11）](http://192.168.10.11)にアクセスしてFuelPHPのトップページを表示

##### バックエンドサーバーの動作確認（WebAPIの呼び出し）

```
curl http://192.168.10.11/memo/write -d "memo=BackEnd_Server_test1"
curl http://192.168.10.11/memo/write -d "memo=BackEnd_Server_test2"
curl http://192.168.10.11/memo/write -d "memo=BackEnd_Server_test3"
curl http://192.168.10.11/memo/read
```

##### フロントエンドサーバー→バックエンドサーバー間通信の動作確認

```
curl http://192.168.10.10/memo/read_backend
```
curlコマンドが利用できない場合は、Chromeの[Advanced REST client](https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo/related)で代用できます。

#### FuelPHPからWebAPI呼び出しの動作確認（仮想マシンにログインした状態）

```
$ cd /vagrant_mysite/webapi
$ php oil r webapi
```
