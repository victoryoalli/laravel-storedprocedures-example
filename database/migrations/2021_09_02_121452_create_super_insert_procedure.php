<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSuperInsertProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS super_insert_procedure;');

        DB::unprepared('CREATE PROCEDURE super_insert_procedure(title varchar(50), content text)
        BEGIN
            INSERT INTO posts (title, content, created_at, updated_at) VALUES(title, content,NOW(),NOW());
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS super_insert_procedure;');

        Schema::dropIfExists('super_insert_procedure');
    }
}
