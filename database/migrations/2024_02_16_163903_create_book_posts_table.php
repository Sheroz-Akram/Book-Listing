<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_posts', function (Blueprint $table) {
            $table->id();
            $table->string("bookTitle");
            $table->string("bookAuthor");
            $table->string("bookPublisher");
            $table->string("bookPublishDate");
            $table->string("bookLanguage");
            $table->integer("bookPageCount");
            $table->float("bookPrice");
            $table->string("bookCondition");
            $table->string("userEmail");
            $table->string("userPhone");
            $table->string("userCity");
            $table->string("userState");
            $table->string("userZip");
            $table->string("coverImage");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_posts');
    }
}
