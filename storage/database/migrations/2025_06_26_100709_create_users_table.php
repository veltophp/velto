<?php

use Velto\Core\Migration\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->createTable('users', function ($table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user');
            $table->boolean('email_verified')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('users');
    }
}