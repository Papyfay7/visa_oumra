<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->enum('statut', ['En cours', 'Terminée', 'Annulée', 'Payé'])->default('En cours')->change();
        });

    }

    public function down()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('statut');
        });
    }

};
