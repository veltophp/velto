<?php

use Velto\Core\Migration\Migration;

class CreateHomesTable extends Migration
{
    public function up()
    {
        $this->createTable('homes', function ($table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('homes');
    }
}