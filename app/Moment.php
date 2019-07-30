<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['title', 'briefDescription', 'procedure', 'forecastDevelopment', 'teachers_record_id', 'resourceStudents', 'classroom_record_id'];

    public function teachersRecord()
    {
        return Record::find($this->teachers_record_id);
    }

    public function teachersRecordFiles()
    {
        return FileRecord::where('record_id', $this->teachers_record_id)->get();
    }

    public function classroomRecordFiles()
    {
        return FileRecord::where('record_id', $this->classroom_record_id)->get();
    }

    public function classroomRecord()
    {
        return Record::find($this->classroom_record_id);
    }

    public function teachingObjects(){
       $teachingObjectsIds = [];
       $teachingObjectsMoments = TeachingObjectMoment::where('moment_id', $this->id)->get();

       foreach ($teachingObjectsMoments as $teachingObjectsMoment) {
            $teachingObjectsIds[] = $teachingObjectsMoment->teaching_object_id;
        }
       return TeachingObject::find($teachingObjectsIds);
    }
}
