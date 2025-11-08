@extends('log-analyzer::layout')

@section('content')
<h1>Prompts</h1>

<a href="{{ route('log-analyzer.prompts.create') }}">Create Prompt</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Key</th>
            <th>User Prompt</th>
            <th>System Prompt</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prompts as $prompt)
            <tr>
                <td>{{ $prompt->id }}</td>
                <td>{{ $prompt->key }}</td>
                <td>{{ Str::limit($prompt->user, 50) }}</td>
                <td>{{ Str::limit($prompt->system, 50) }}</td>
                <td>
                    <a href="{{ route('log-analyzer.prompts.edit', $prompt) }}">Edit</a>
                    <form action="{{ route('log-analyzer.prompts.destroy', $prompt) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this prompt?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
