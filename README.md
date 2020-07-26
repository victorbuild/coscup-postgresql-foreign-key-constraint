<p align="center"><img src="COSCUP-postgreSQL-Logo.png" width="400"></p>

## 關於關聯這件事 - 後端認識外鍵約束

PostgreSQL 2020COSCUP議程，實際操作範例，產生資料表以及假資料，體驗不同設定的外鍵約束，討論外鍵約束加不加的問題。

講者：Victor

系統越複雜，越需要一些規則來限制，不讓系統雜亂不堪。

1. Laravel 搭配 PostgreSQL
2. 使用資料庫的工作?
3. 後端工程師來看資料庫
4. 外鍵約束有哪些?
5. 現實種是殘酷的，建立外鍵約束的優缺點？
6. 情境交流時間！你還知道什麼使用情境嗎？

## 安裝流程

1. git clone
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. 設定PosgreSQL 連線
6. 查看 Migration
    database\migrations\2020_07_26_065337_create_posts_table.php
7. 使用指令 php artisan migrate:refresh --seed 重置資料庫與填入假資料預設自動填入5個使用者以及300篇文章資料。

## 說明

主要建立使用者與文章的一對多關聯，嘗試設定不同 onDelete 外鍵約束設定，體驗資料庫發生事情。




