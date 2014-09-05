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

+ 仮想マシンへの接続

```
$ vagrant ssh
```

+ 仮想マシン上のウェブサイトへアクセス

ブラウザから[http://192.168.10.10](http://192.168.10.10)にアクセスする
