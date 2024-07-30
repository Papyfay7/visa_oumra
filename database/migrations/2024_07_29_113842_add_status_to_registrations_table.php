<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->enum('status', ['En cours', 'Terminée', 'Annulée', 'Payé'])->default('En cours')->change();
        });
    }

    public function down()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->enum('status', ['En cours', 'Terminée', 'Annulée'])->default('En cours')->change();
        });
    }

}
