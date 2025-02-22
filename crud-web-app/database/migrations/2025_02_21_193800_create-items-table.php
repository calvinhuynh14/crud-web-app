<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('product_code')->unique();
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        DB::table('items')->insert([
            [
                'name' => 'Item 1',
                'description' => 'Description 1',
                'product_code' => '1234567890',
                'price' => 100.00,
            ],
            [
                'name' => 'Item 2',
                'description' => 'Description 2',
                'product_code' => '1234567891',
                'price' => 200.00,
            ],
            [
                'name' => 'Item 3',
                'description' => 'Description 3',
                'product_code' => '1234567892',
                'price' => 300.00,
            ],
            [
                'name' => 'Item 4',
                'description' => 'Description 4',
                'product_code' => '1234567893',
                'price' => 400.00,
            ],     
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
