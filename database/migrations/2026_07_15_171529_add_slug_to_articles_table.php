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
        Schema::table('articles', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
        });

        $articles = \DB::table('articles')->get();
        foreach ($articles as $article) {
            \DB::table('articles')
                ->where('id', $article->id)
                ->update(['slug' => \Illuminate\Support\Str::slug($article->title) . '-' . $article->id]);
        }

        Schema::table('articles', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
