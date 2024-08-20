<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTacheMaisonsTable extends Migration
{
    public function up()
    {
        Schema::create('tache_maisons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tache_id')->constrained('taches')->onDelete('cascade');
            $table->foreignId('maison_id')->constrained('maisons')->onDelete('cascade');
            $table->foreignId('agent_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->date('date_notification');
            $table->enum('etat', ['EnAttente', 'EnCours', 'Validee']);
            $table->date('date_validation')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tache_maisons');
    }
}
