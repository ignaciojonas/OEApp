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
      factory(App\Moment::class, 1)->create(['title'=>'título', 'description'=>'descripción', 'procedure'=>'consigna', 'developmentForecast'=>'previsiones del desarrollo', 'registrationTeacher'=>'registros entre docentes', 'resourcesStudent'=>'recursos para el alumnos', 'classroomRecord'=>'registros del aula']);
      factory(App\Moment::class, 10)->create();
    }
}
