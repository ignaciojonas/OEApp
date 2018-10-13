<?php

use Illuminate\Database\Seeder;

class MomentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Moment::class, 1)->create(['procedure'=>'consigna', 'suggestions'=>'sugerencia', 'achievementExpectation'=>'expectativa de logro', 'implementationResult'=>'implementación y resultado']);
      factory(App\Moment::class, 10)->create();
    }
}
