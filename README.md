ACS_WebAppTest
==============

※Virtualbox、Vagrantは事前にインストールしておいてください。


### 事前準備

+ Bundlerのインストール（Gemfileに登録してあるGemを一括で導入してくれるツール）

```
gem install bundler
```

+ Gemのインストール

```
bundle install --path vendor/bundle
```

+ Vagrantプラグインのインストール

```
$ vagrant plugin install vagrant-omnibus
```

### 仮想マシンの起動

+ 仮想マシン環境の取得

```
$ git clone git@github.com:sumlibe/ACS_WebAppTest.git
```

+ 仮想マシン環境の起動

```
$ cd ACS_WebAppTest
$ vagrant up
```

+ 仮想マシンへの接続

```
vagrant ssh
```


