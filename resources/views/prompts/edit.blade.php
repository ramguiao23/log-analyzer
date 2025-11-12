@extends('log-analyzer::layout')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Edit Prompt</h1>

    <form method="POST" action="{{ route('log-analyzer.prompts.update', $prompt) }}">
        @csrf
        @method('PUT')

        @include('log-analyzer::prompts.form')

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('log-analyzer.prompts.index') }}" class="btn btn-secondary mt-3 ml-2">Cancel</a>
    </form>
</div>
@endsection
