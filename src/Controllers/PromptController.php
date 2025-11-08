<?php

namespace Rmhl\LogAnalyzer\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Rmhl\LogAnalyzer\Models\Prompt;

class PromptController extends Controller
{
    public function index()
    {
        $prompts = Prompt::all();
        return view('log-analyzer::prompts.index', compact('prompts'));
    }

    public function create()
    {
        return view('log-analyzer::prompts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|unique:prompts,key',
            'system' => 'nullable|string',
            'user' => 'required|string',
        ]);

        Prompt::create($data);

        return redirect()->route('log-analyzer.prompts.index')->with('success', 'Prompt created.');
    }

    public function edit(Prompt $prompt)
    {
        return view('log-analyzer::prompts.edit', compact('prompt'));
    }

    public function update(Request $request, Prompt $prompt)
    {
        $data = $request->validate([
            'key' => 'required|string|unique:prompts,key,' . $prompt->id,
            'system' => 'nullable|string',
            'user' => 'required|string',
        ]);

        $prompt->update($data);

        return redirect()->route('log-analyzer.prompts.index')->with('success', 'Prompt updated.');
    }

    public function destroy(Prompt $prompt)
    {
        $prompt->delete();

        return redirect()->route('log-analyzer.prompts.index')->with('success', 'Prompt deleted.');
    }
}
