<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddTestUsers extends Migration
{
public function up()
{
DB::table('users')->insert([
'name' => 'John Doe',
'email' => 'john@example.com',
'password' => bcrypt('password123'),
]);
}

public function down()
{
DB::table('users')->where('email', 'john@example.com')->delete();
}
}
