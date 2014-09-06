ACS_WebAppTest
==============

※Virtualbox、Vagrantは事前にインストールしておいてください。


### 事前準備

+ Vagrantプラグインのインストール（インストール済の場合は不要）

```
$ vagrant plugin install vagrant-omnibus
```

+ Bundlerのインストール（インストール済の場合は不要）

```
$ gem install bundler
```

+ 仮想マシン環境の取得（初回のみ）

```
$ git clone git@github.com:sumlibe/ACS_WebAppTest.git
$ cd ACS_WebAppTest
```

+ Gemのインストール（初回のみ）

```
$ bundle install --path vendor/bundle
```

+ サードパーティcookbookの取得（初回のみ）

```
$ bundle exec berks vendor cookbooks
```

### 動作確認

+ 仮想マシン環境の起動

```
$ vagrant up
```

+ 仮想マシンの起動確認

```
$ vagrant ssh
```

+ WWWサーバーの動作確認

ブラウザから[http://192.168.10.10](http://192.168.10.10)にアクセスする
ブラウザから[http://192.168.10.11](http://192.168.10.11)にアクセスする


+ WebAPIの動作確認

```
curl http://localhost:8000/memo/write -d "memo=test1"
curl http://localhost:8000/memo/write -d "memo=test2"
curl http://localhost:8000/memo/write -d "memo=test3"
curl http://localhost:8000/memo/read
```

上記のコマンドが利用できない場合は、Chromeの[Advanced REST client](https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo/related)を代替できます。
