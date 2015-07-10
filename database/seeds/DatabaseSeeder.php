<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
          'name'      => env('AUTHORIZED_USER_NAME', 'somebody'),
          'email'     => env('AUTHORIZED_USER_EMAIL', 'email@example.com'),
          'password'  => bcrypt(env('AUTHORIZED_USER_PASSWORD', 'secret'))
          ]);
    }

}
