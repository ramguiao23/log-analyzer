@extends('log-analyzer::layout')

@section('content')
<h1>Edit Prompt</h1>

<form method="POST" action="{{ route('log-analyzer.prompts.update', $prompt) }}">
    @csrf
    @method('PUT')
    @include('log-analyzer::prompts.form')
    <button type="submit">Update</button>
</form>
@endsection
