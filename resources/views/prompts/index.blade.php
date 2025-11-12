@extends('log-analyzer::layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Prompts</h1>
        <a href="{{ route('log-analyzer.prompts.create') }}" class="btn btn-primary">Create Prompt</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
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
                        <td class="d-flex">
                            <a href="{{ route('log-analyzer.prompts.edit', $prompt) }}" class="btn btn-sm btn-secondary mr-2">Edit</a>
                            <form action="{{ route('log-analyzer.prompts.destroy', $prompt) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this prompt?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
