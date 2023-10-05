<?php

use App\Enums\EstadoCivil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('iniciais', 10)->unique();
            $table->string('email_institucional')->unique();
            $table->string('curriculo_lattes')->nullable();
            $table->string('curriculo_web')->nullable();
            $table->date('nascimento');
            $table->string('nacionalidade')->nullable();
            $table->string('naturalidade')->nullable();
            $table->enum('estado_civil', EstadoCivil::getValues())->default(EstadoCivil::DEFAULT);
            $table->string('ramal', 4);
            $table->string('tipo_sanguineo', 10);
            $table->string('alergias');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
