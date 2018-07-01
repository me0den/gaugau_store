<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder {

  public function run () {
    DB::table('users')->delete();
    DB::table('users')->insert(array(
      array(
        'name' => 'user1',
        'email' => 'user1@gmail.com',
        'password' => Hash::make('admin'),
        'created_at' => Carbon::now(),
      ),
    ));
  }
}
