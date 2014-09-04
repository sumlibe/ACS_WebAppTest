ACS_WebAppTest
==============

※Virtualbox、Vagrantは事前にインストールしておいてください。


### 事前準備

+ Vagrantプラグインのインストール

```
$ vagrant plugin install vagrant-omnibus
```

+ Bundlerのインストール（Gemfileに登録してあるGemを一括で導入してくれるツール）

```
$ gem install bundler
```

### 仮想マシンの起動

+ 仮想マシン環境の取得

```
$ git clone git@github.com:sumlibe/ACS_WebAppTest.git
$ cd ACS_WebAppTest
```

+ Gemのインストール

```
$ bundle install --path vendor/bundle
```

+ サードパーティcookbookの取得

```
$ bundle exec berks vendor cookbooks
```

+ 仮想マシン環境の起動

```
$ vagrant up
```

+ 仮想マシンへの接続

```
$ vagrant ssh
```


