<?php

namespace Rmhl\LogAnalyzer\View\Components;

use Illuminate\View\Component;
use Rmhl\LogAnalyzer\Models\Prompt;

class LogAnalyzerComponent extends Component
{
    public function render()
    {
        $prompts = Prompt::all();

        return view('log-analyzer::prompts.index', compact('prompts'));
    }
}
