<?php

namespace App\Http\Controllers;

use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        $data = [
            'status' => 200,
            'data' => $student
        ];
        return response()->json($data, 200);
    }
}
