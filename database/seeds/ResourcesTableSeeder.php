<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Resource::class, 1)->create(['name'=>'audio', 'type'=>'medio auditivo']);
      factory(App\Resource::class, 1)->create(['name'=>'video', 'type'=>'medio visual']);
      factory(App\Resource::class, 1)->create(['name'=>'texto', 'type'=>'texto acompañante']);
      factory(App\Resource::class, 10)->create();
    }
}
