<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Les demandes de devis envoyées depuis le site.
     */
    public function up(): void
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();

            // Étape 1 et 2 : le besoin et le projet
            $table->string('family', 40);
            $table->string('project', 40);
            $table->string('building', 40);
            $table->string('quantity', 160)->nullable();
            $table->string('timeline', 40);

            // Étape 3 : les détails
            $table->text('details');
            $table->string('attachment_path')->nullable();
            $table->string('attachment_name')->nullable();

            // Étape 4 : les coordonnées
            $table->string('profile', 40);
            $table->string('name', 100);
            $table->string('company', 150);
            $table->string('email', 254);
            $table->string('phone', 30);
            $table->string('postcode', 10);

            // D'où vient la demande (campagnes publicitaires)
            $table->string('utm_source', 100)->nullable();
            $table->string('utm_medium', 100)->nullable();
            $table->string('utm_campaign', 150)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
