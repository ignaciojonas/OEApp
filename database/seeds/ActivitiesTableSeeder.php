<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Activity::class, 1)->create(['procedure'=>'consigna', 'suggestions'=>'sugerencia', 'achievementExpectation'=>'expectativa de logro', 'implementationResult'=>'implementación y resultado']);
      factory(App\Activity::class, 10)->create();
    }
}
