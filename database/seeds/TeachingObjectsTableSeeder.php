<?php
namespace Database\Seeders;
use App\TeachingObject;
use Illuminate\Database\Seeder;

class TeachingObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TeachingObject::class, 10)->create();
    }
}
