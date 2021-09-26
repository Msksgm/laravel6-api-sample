## 概要

Laravel 6 系（PHP7.3 系）で Web API サーバーを作成したサンプルアプリです。

解説の記事は以下

## 動作環境

-   MacOS
-   PHP 7.3 系
-   composer インストール済み
-   docker compose 実行可能

## 実行方法

### DB を準備

```bash
docker compose up -d
```

### マイグレーション、ダミーデータの準備

```bash
php artisan migrate
php artisan db:seed
```

### API サーバーを起動

```bash
php artisan serve
```
