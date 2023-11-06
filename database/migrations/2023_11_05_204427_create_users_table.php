<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nickname',100);
            $table->string('name', 100);
            $table->string('lastname', 100);
            $table->integer('gender');
            $table->integer('age');
            $table->integer('document_type');
            $table->integer('document_number');
            $table->integer('phone');
            $table->boolean('status')->default(false);
            $table->foreignId('role_id')->nullable()->constrained('roles')->nullOnDelete();           
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');

        
    }
}
