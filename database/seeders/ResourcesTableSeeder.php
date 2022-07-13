<?php

namespace Database\Seeders;

use App\Resource;
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
      factory(Resource::class, 1)->create(['name'=>'audio', 'type'=>'medio auditivo']);
      factory(Resource::class, 1)->create(['name'=>'video', 'type'=>'medio visual']);
      factory(Resource::class, 1)->create(['name'=>'texto', 'type'=>'texto acompañante']);
      factory(Resource::class, 1)->create(['name'=>'presentación', 'type'=>'presentación de diapositivas']);
      factory(Resource::class, 1)->create(['name'=>'hipervínculo', 'type'=>'hipervínculo']);
      factory(Resource::class, 1)->create(['name'=>'imagen', 'type'=>'imagen']);

    }
}
