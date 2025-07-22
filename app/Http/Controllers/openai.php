<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI as FacadesOpenAI;

class openai extends Controller
{
    public function index(Request $request)
    {
        $result = FacadesOpenAI::chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
            ],
        ]);

        echo $result->choices[0]->message->content;
        return response()->json(['message' => $result->choices[0]->message->content]);
    }
}
