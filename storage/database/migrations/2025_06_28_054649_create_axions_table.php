<?php

use Velto\Core\Migration\Migration;

class CreateAxionsTable extends Migration
{
    public function up()
    {
        $this->createTable('axions', function ($table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('axions');
    }
}