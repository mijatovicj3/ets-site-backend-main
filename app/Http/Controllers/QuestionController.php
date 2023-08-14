<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'text' => 'required|string',
            'is_multiplie_choice' => 'required|boolean',
            'points' => 'required|integer',
            'max_answers' => 'required|integer',
        ]);

        $question = Question::create($validatedData);

        return response()->json($question, 201);
    }

    public function show(Question $question)
    {
        return response()->json($question);
    }

    public function update(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'text' => 'required|string',
            'is_multiplie_choice' => 'required|boolean',
            'points' => 'required|integer',
            'max_answers' => 'required|integer',
        ]);

        $question->update($validatedData);

        return response()->json($question);
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return response()->json(null, 204);
    }
}
