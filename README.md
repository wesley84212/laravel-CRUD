

Use laravel to practice CRUD 
=====================
使用環境
---------------------
- composer 1.10.9
- PHP  7.4.7
- laravel install 1.5.0
- database
  - mysql
- vue.js

Docker
---------------------
- use image: arm64v8/mariadb 
- use phpMyadmin to manager

目的
---------------------
- 基本CURD
- laravel使用熟悉
- Eloquent ORM OR SQL
- 前後端分離式開發

CLI & 環境常見問題
---------------------
```
php artisan serve //用來啟動laravel 內建server
```
- 如果遇到 The openssl extension is required for SSL/TLS protection

```
php -i to get php informarion

Or 

<?php
phpinfo()
?>
```
取得php.ini路徑之後
```
將extension=openssl取消註解

```
- 如果mysql無法連結
```
將extension=pdo_mysql取消註解
```
- docker-compose.yaml 已經寫好需要的image
```
docker-compose up -d
用來啟動docker多個image

docker-compose down or restart
用來停止docker多個image

docker ps -a
確認目前docker image
```
