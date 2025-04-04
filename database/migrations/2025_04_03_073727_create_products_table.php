<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('original_price', 10, 2)->nullable();
            $table->unsignedInteger('discount_percentage')->default(0);
            $table->integer('rating')->default(0);
            $table->integer('review_count')->default(0);
            $table->boolean('is_hot')->default(false);
            // Make category_id nullable so that ON DELETE SET NULL works
            $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->nullOnDelete();
            $table->foreignId('brand_id')->nullable()->constrained()->nullOnDelete();
            $table->text('description')->nullable();
            $table->json('specifications')->nullable();
            $table->boolean('in_stock')->default(true);
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
