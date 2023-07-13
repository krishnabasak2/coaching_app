<?php

namespace App\Helpers;

use App\Models\Batch;
use App\Models\Student;
use App\Models\Teacher;

class Helper
{
    public static function slug(string $string)
    {
        $slug = strtolower(trim($string));
        $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug);
        $slug = preg_replace('/-+/', '-', $slug);
        return $slug;
    }

    public static function batch_id()
    {
        $count = Batch::count();
        $rand = rand(1, 100);
        $id = 'BT' . $rand . $count + 1;
        return $id;
    }

    public static function student_id()
    {
        $count = Student::count();
        $rand = rand(1, 100);
        $id = 'ST00' . $rand . $count + 1;
        return $id;
    }

    public static function teacher_id()
    {
        $count = Teacher::count();
        $rand = rand(1, 100);
        $id = 'TH00' . $rand . $count + 1;
        return $id;
    }
}
