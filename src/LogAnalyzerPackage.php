<?php

namespace Rmhl\LogAnalyzer;

use OpenAI\Factory;
use Rmhl\LogAnalyzer\Models\Prompt;

class LogAnalyzerPackage
{
    protected $client;
    protected $model;

    public function __construct(?string $apiKey = null, ?string $model = null)
    {
        $this->client = (new Factory())
            ->withApiKey($apiKey ?? env('OPENAI_API_KEY'))
            ->make();

        // Default model can be overridden by .env or argument
        $this->model = $model ?? env('OPENAI_MODEL', 'gpt-4o-mini');
    }

    public function analyze(string $logs, ?string $model = null, ?string $promptKey = null): string
    {
        $promptKey = ($promptKey) ? $promptKey : "default_log_analysis";
        
        $promptData = Prompt::where('key', $promptKey)->first();

        $prompt = $promptData['user'] . "\n\n{$logs}";

        $response = $this->client->chat()->create([
            'model' => $model ?? $this->model,
            'messages' => [
                ['role' => 'system', 'content' => $promptData['system']],
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return $response->choices[0]->message->content ?? 'No response from AI.';
    }
}
