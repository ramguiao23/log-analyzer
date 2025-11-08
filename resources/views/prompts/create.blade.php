@extends('log-analyzer::layout')

@section('content')
<h1>Create Prompt</h1>

<form method="POST" action="{{ route('log-analyzer.prompts.store') }}">
    @csrf
    @include('log-analyzer::prompts.form')
    <button type="submit">Save</button>
</form>
@endsection
