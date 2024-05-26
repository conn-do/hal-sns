# HAL SNS

PHPの授業で使う

## 環境構築

1. composer のインストール

    - [Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)<br>
    上記ページから Composer-Setup.exe をダウンロードしてインストール
    - [Mac](https://getcomposer.org/download/)<br>
    上記ページを参考に以下のコマンドを実行
    ```
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

    sudo mv composer.phar /usr/local/bin/composer
    ```
    - ターミナル / コマンドプロンプトで `composer -V` を実行してバージョンが出力されればOK

1. このリポジトリをクローンする

1. `composer install` する

1. XAMPP / MAMPP で mysql を起動する

1. mysql に接続して DB を作成する<br>
    ```
    CREATE DATABASE hal_sns;
    USE hal_sns;

    何もデータがないことを確認する
    SHOW TABLES;
    ```

1. `.env` を自分の環境に合わせて変更する

    ```
    # Mac
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=hal_sns
    DB_USERNAME=root
    DB_PASSWORD=root

    # Windows
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=hal_sns
    DB_USERNAME=root
    DB_PASSWORD=
    ```

1. migration を実行する<br>
    `php artisan migrate`<br>
    mysqlで `SHOW TABLES;` を実行してテーブルが作成されたことを確認する

1. 開発用サーバーの起動<br>
    `php artisan serve`<br>
    表示されたURLにアクセスする
