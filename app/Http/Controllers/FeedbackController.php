<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FeedbackController;
use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        Feedback::create($request->all());

        return back()->with('success', 'Thank you for your message!');
    }
}
