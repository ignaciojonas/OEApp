<?php
namespace Database\Seeders;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 1)->create(['email'=>'test@test.com', 'password'=>bcrypt('secret123!')]);
      factory(App\User::class, 10)->create();
    }
}
