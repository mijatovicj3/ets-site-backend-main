<?php
namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::all();
        return response()->json($answers);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'user_id' => 'required|exists:users,id',
            'content' => 'nullable|string',
            'choice_id' => 'required|exists:choices,id',
        ]);

        $answer = Answer::create($validatedData);

        return response()->json($answer, 201);
    }

    public function show(Answer $answer)
    {
        return response()->json($answer);
    }

    public function update(Request $request, Answer $answer)
    {
        $validatedData = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'user_id' => 'required|exists:users,id',
            'content' => 'nullable|string',
            'choice_id' => 'required|exists:choices,id',
        ]);

        $answer->update($validatedData);

        return response()->json($answer);
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();

        return response()->json(null, 204);
    }
}
