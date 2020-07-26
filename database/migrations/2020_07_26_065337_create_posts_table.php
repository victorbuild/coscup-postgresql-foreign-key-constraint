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
            $table->unsignedInteger('user_id')->nullable();
            $table->text('content')->nullable()->comment('備註');
            $table->timestamps();

            // 子資料設定為null
            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('set null');

            // 主資料刪除一起刪除子資料
            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('cascade');

            // 主資料有外鍵約束關聯不允許刪除
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
