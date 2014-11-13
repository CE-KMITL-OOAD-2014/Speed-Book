<?php
 
class Users {
 
    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        //Create table
        Schema::create('users_2', function($table)
        {
            //Set engine
            $table->engine = 'InnoDB';
 
            //Create fields
            $table->increments('id');
            $table->string('username', 64);
            $table->string('password', 64);
            $table->string('email', 64);
            $table->timestamps();
 
            //Create index
            $table->unique('username');
            $table->unique('email');
        });
    }
 
    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        //Drop table
        Schema::drop('users');
    }
 
}