<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(config('tenant_subscriptions.tables.plan_features'), function (Blueprint $table) {
            // Columns
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('slug');
            $table->string('value');
            $table->smallInteger('resettable_period')->unsigned()->default(0);
            $table->string('resettable_interval')->default('month');
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->unique(['plan_id', 'slug']);
            $table->foreign('plan_id')
                ->references('id')
                ->on(config('tenant_subscriptions.tables.plans'))
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(config('tenant_subscriptions.tables.plan_features'));
    }
}
