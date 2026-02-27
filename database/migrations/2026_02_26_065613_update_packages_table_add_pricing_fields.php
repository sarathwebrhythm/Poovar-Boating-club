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
        Schema::table('packages', function (Blueprint $table) {

            // Make existing price nullable (needed for flexible pricing)
            $table->unsignedInteger('price')->nullable()->change();

            // Pricing type (fixed / flexible)
            $table->enum('pricing_type', ['fixed', 'flexible'])
                  ->default('fixed')
                  ->after('price');

            // For Fixed package
            $table->unsignedInteger('duration')
                  ->nullable()
                  ->after('pricing_type');

            // For Flexible package
            $table->unsignedInteger('base_duration')->nullable()->after('duration');
            $table->unsignedInteger('base_price')->nullable()->after('base_duration');
            $table->unsignedInteger('increment_minutes')->nullable()->after('base_price');
            $table->unsignedInteger('increment_price')->nullable()->after('increment_minutes');
            $table->unsignedInteger('max_duration')->nullable()->after('increment_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {

            $table->dropColumn([
                'pricing_type',
                'duration',
                'base_duration',
                'base_price',
                'increment_minutes',
                'increment_price',
                'max_duration'
            ]);

            // Revert price back to NOT NULL
            $table->unsignedInteger('price')->nullable(false)->change();
        });
    }
};