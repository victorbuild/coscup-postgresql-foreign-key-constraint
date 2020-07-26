<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // 會員的外鍵
            $table->unsignedInteger('user_id')->nullable();
            $table->text('content')->nullable()->comment('備註');
            $table->timestamps();

            /**
             * 以 onDelete 為例的三種約束情況
             * 以下則一取消註解 並使用 php artisan migrate:refresh --seed 指令重置資料庫與填入假資料
             * 嘗試在不同情況下刪除主資料(User)資料庫發生的情形
             */
            
            // 子資料設定為null
            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('set null');

            // 子資料一起刪除
            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('cascade');

            // 預設有外鍵約束關聯，有約束關係子資料不允許刪除
            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
