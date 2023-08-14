<?php
namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return response()->json($exams);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'start_date' => 'required|date_format:H:i:s',
            'duration' => 'required|integer',
        ]);

        $exam = Exam::create($validatedData);

        return response()->json($exam, 201);
    }

    public function show(Exam $exam)
    {
        return response()->json($exam);
    }

    public function update(Request $request, Exam $exam)
    {
        $validatedData = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'start_date' => 'required|date_format:H:i:s',
            'duration' => 'required|integer',
        ]);

        $exam->update($validatedData);

        return response()->json($exam);
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();

        return response()->json(null, 204);
    }
}
