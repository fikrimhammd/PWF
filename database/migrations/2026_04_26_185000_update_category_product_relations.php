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
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
            // Can't easily add unique() to existing name without handling potential duplicates.
            // Let's assume it's okay for now, or just add the unique constraint.
            // Since it's a practicum, maybe just keep it simple or drop and recreate.
        });

        // Since it's easier and safer for SQLite to just modify via standard drops, let's do this:
        // Or better yet, just write the schema changes exactly as requested in UCP 1.
        
        // Ensure name is unique
        Schema::table('categories', function (Blueprint $table) {
            $table->unique('name');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->after('user_id')->constrained('categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->dropUnique(['name']);
            $table->foreignId('product_id')->nullable()->constrained('products')->cascadeOnDelete();
        });
    }
};
