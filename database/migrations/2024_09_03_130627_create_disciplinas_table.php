<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

public function up()
{
    Schema::create('disciplinas', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->timestamps();
    });
}


