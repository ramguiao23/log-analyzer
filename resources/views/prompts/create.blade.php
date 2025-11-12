@extends('log-analyzer::layout')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Create Prompt</h1>

    <form method="POST" action="{{ route('log-analyzer.prompts.store') }}">
        @csrf

        @include('log-analyzer::prompts.form')

        <button type="submit" class="btn btn-primary mt-3">Save</button>
        <a href="{{ route('log-analyzer.prompts.index') }}" class="btn btn-secondary mt-3 ml-2">Cancel</a>
    </form>
</div>
@endsection
