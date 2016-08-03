<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     * https://laravel.com/docs/4.2/schema
     * All field required by default ->nullable() allows nulls
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id'); // auto incrementing seed - INT (PRIMARY KEY - AUTO)
            $table->string('title'); // string max length is 255 - VARCHAR
            $table->text('body'); // text is A LOT of characters  - TEXT
            $table->timestamps(); // datetime - created_at updated_at - TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
