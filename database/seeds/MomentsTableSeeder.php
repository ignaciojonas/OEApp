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
      factory(App\Moment::class, 1)->create(['title'=>'título', 'briefDescription'=>'descripción', 'procedure'=>'consigna', 'forecastDevelopment'=>'previsiones del desarrollo', 'recordsTeachers'=>'registros entre docentes', 'resourceStudents'=>'recursos para el alumno', 'classroomRecords'=>'registros del aula']);
      factory(App\Moment::class, 10)->create();
    }
}
