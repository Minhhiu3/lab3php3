<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Mã sách
            $table->string('title'); // Tiêu đề sách
            $table->string('thumbnail')->nullable(); // Ảnh mô tả
            $table->string('author'); // Tác giả
            $table->string('publisher'); // Nhà xuất bản
            $table->datetime('publication'); // Ngày xuất bản
            $table->double('price', 10, 2); // Giá bán
            $table->integer('quantity'); // Số lượng
            $table->unsignedBigInteger('category_id'); // Mã loại
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};