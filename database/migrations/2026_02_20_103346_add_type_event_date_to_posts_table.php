<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            if (!Schema::hasColumn('posts', 'type')) {
                $table->enum('type', ['actualite','evenement_avenir','evenement_passe'])
                      ->default('actualite')->after('status');
            }
            if (!Schema::hasColumn('posts', 'event_date')) {
                $table->date('event_date')->nullable()->after('type');
            }
            if (!Schema::hasColumn('posts', 'location')) {
                $table->string('location')->nullable()->after('event_date');
            }
            if (!Schema::hasColumn('posts', 'category')) {
                $table->string('category')->nullable()->after('location');
            }
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['type', 'event_date', 'location', 'category']);
        });
    }
};