<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class openai extends Controller
{
    public function index(Request $request)
    {     
        
        return response()->json(['message' => 'OpenAI endpoint hit successfully']);
    }
}
