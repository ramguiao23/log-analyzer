<?php

namespace Rmhl\LogAnalyzer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromptSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prompts')->insertOrIgnore([
            [
                'key' => 'default_log_analysis',
                'system' => 'You are a helpful log analysis assistant.',
                'user' => 'Analyze this log and explain the likely cause and fix.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
