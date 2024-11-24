# macOS の環境構築手順

ここでは以下の流れで説明していきます。

1. Homebrew のセットアップ
2. サンプルコードお試し環境のダウンロード
3. Docker Desktop のインストール
4. Visual Studio Code の設定
5. サンプルコードお試し環境の利用方法
6. 書籍内のサンプルコードの実行方法

## Homebrew のセットアップ

macOS にいくつか追加でコマンドをインストールする必要があるため、Homebrewのセットアップを行います。

すでに Homebrewのセットアップが終わっている場合はここは飛ばして、次の「コマンドのインストール」に進んでください。

まず、ターミナルを開きます。ターミナルは「アプリケーション/ユーティリティ」フォルダに入っています。

標準のターミナルではなく iTerm2を利用する場合はこれ以降はそちらに置き換えて読んでください。

ターミナルを開いたら次のコマンドを入力します。

```sh
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

このコマンドはHomebrewのサイトに記載されているものなので、以下のURLからコピーして利用するのが簡単でしょう。

- https://brew.sh/ja/

実行すると、Xcode Command Line Tools のインストールを促されることがあります。その場合は Enter を押してそのまま処理を続行してください。

一通りインストールして、次のコマンドを入力してバージョンが表示されたら正しくインストールができています。

```sh
brew -v
```

## サンプルコードお試し環境のダウンロード

ここで一旦このリポジトリで配布しているサンプルコードのお試し環境のダウンロードを行います。

まず、ターミナルを起動します。

起動後まずは、いくつかのパッケージのインストールを行います。

ターミナル上で以下のように入力してください。入

```sh
brew install make git
```

これによって、今回利用する git コマンドと make コマンドがインストールされます。

次に git の設定を行います。git で設定しておくべきものはいくつかありますが、最低限のものとして以下のものを設定しておきましょう。

```sh
git config --system user.name "名前"
git config --system user.email "メールアドレス"
```

上記の「名前」と「メールアドレス」の部分は自分のものに置き換えて設定してください。

git の設定がここまですんだら、以下のコマンドを入力して、サンプルコードお試し環境のダウンロードを行います。

```
mkdir -p ~/src/github.com/php-tech-master24
cd ~/src/github.com/php-tech-master24
git clone https://github.com/php-tech-master24/devenv.git
```

サンプルコードお試し環境の実際の利用方法は後ほど説明します。

## Docker Desktop のインストール

次は Docker の実行環境のセットアップになります。

Docker のウェブサイトから Docker Desktop をダウンロードします。以下のURLの「Download Docker Desktop」をクリックすると、対応OSとCPUアーキテクチャーの選択肢がでるので、「Download for Mac - Apple Silicon」を選択します。（IntelのCPUのPCを利用している場合は「Download for Mac - Intel Chip」の方を選択してください）

- https://www.docker.com/get-started/

ダウンロードが完了したら Docker.dmg ができるので、ダブルクリックすると、Docker.app を Applications フォルダに移動するように指示が表示されるので指示通り移動します。

Finderでアプリケーションフォルダを開くと先程移動させた Docker.app があるので、ダブルクリックすると Docker 環境が起動します。

## Visual Studio Code の設定

Docker のセットアップが完了したので、Visual Studio Code（これ以降 VS Code）でファイルを編集する準備を行います。

VS Code の入手がまだの方は、まずは入手から行ってください。

以下のURLの「Download for Mac」をクリックすると、zipファイルがダウンロードされます。zipファイルを展開すると VS Code のアプリケーションファイルがあるので、それをアプリケーションフォルダに移動しましょう。

- https://code.visualstudio.com/

VS Code には Extension という機能を拡張する機構が備わっており、いくつかの Extension を入れておきましょう。

- VS Code を起動
- VS Code の左に並んだアイコンの四角が4つあって、一つだけ飛び出したようなアイコンをクリックします
- 検索窓に以下のものを入力して、いくつかの Extension をインストールしておきましょう
  - Japanese Language Pack for Visual Studio Code
  - PHP Intelephense
  - Docker

上記のものを入れておくとメニューの日本語化ができ、PHPのコードの入力支援、Dockerサポートが利用可能になります。

では、VS Code からサンプルコードお試し環境のファイルを編集できるようにしてみましょう。

- VS Code を起動
- ファルメニューにある「フォルダを開く」で以下のフォルダを指定して開く
る
  - src/github.com/php-tech-master24/devenv

## サンプルコードお試し環境の利用方法

サンプルコードお試し環境の利用方法を説明します。

### 環境の起動方法

起動方法は以下の手順になります。

- Docker Desktop を起動
- ターミナルを開く
- サンプルコードお試し環境のフォルダに移動

```sh
cd ~/src/github.com/php-tech-master24/devenv
```

- 以下のコマンドを実行し環境を起動

```sh
make up
```

初回起動時のみ Docker build が実行されるため、時間がかかります。

### コマンド実行環境への接続

環境が起動している状態で、以下の手順を行うとコマンド実行環境へ接続できます。

```sh 
make php-cli
```

上記を実行すると、コマンドが入力できる状態になります。（注: root@ の後ろの文字列は毎回変わります）

```sh
root@e7c45759d228:/var/www/html#
```

書籍内で以下の記述になっているものは以下のように置き換えて実行してください。

#### 書籍内の記述

```sh
$ vendor/bin/phpunit --version
```

#### お試し環境

```sh
root@e7c45759d228:/var/www/html# vendor/bin/phpunit --version
```

### 環境の終了方法

環境が起動している状態で、以下の手順を行うと環境が終了します。

```sh
make down
```

## 書籍内のサンプルコードの実行方法

最後に書籍内に記載されているサンプルコードの実行方法を説明します。

Docker Desktopを起動した後、お試し環境の起動を行います。

```sh
make up
```

次にコマンド実行環境に接続します。

```sh
make php-cli
```

ここまで実行しておいて、VS Code でサンプルコードお試し環境の app フォルダ以下に書籍に記載されているコードを入力します。

例えば、3章に書かれている最初のサンプルコードを試したい場合は以下のようなフォルダおよびファイルをつくって入力してください。

- app/chapter03/03-01_array1.php

サンプルファイルが入力できたら次のようにすれば実行できます。(実行環境上では app フォルダの指定は必要ありません)

```sh
root@e7c45759d228:/var/www/html# php chapter03/03-01_array1.php
```

お試しが一通り完了したら、お試し環境を終了しておきましょう。

```sh
make down
```