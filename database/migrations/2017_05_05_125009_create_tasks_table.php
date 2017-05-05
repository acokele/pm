<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {


  public function up() {
    Schema::create('tasks', function(Blueprint $table) {

      $table->increments('id');
      $table->integer('parent_id')->nullable()->index();
      $table->integer('lft')->nullable()->index();
      $table->integer('rgt')->nullable()->index();
      $table->integer('depth')->nullable();

      $table->date('start_date');
      $table->date('end_date');
      $table->integer('man_hours_required');
      $table->integer('weight')->default(1);
      $table->boolean('completed')->default(false);

      $table->timestamps();
    });
  }

  public function down() {
    Schema::drop('tasks');
  }

}
