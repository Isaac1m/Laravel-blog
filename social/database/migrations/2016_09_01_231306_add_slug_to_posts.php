<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{

      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
          //Add a unique slug To Every Post
          Schema::table('posts',function($table) {
            $table->string('slug')->unique()->after('body');
          });
      }

      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
          //delete slug
          Schema::table('posts',function($table){
            $table->dropColumn('slug');
          });
      }
  }
