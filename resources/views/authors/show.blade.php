@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-3 mb-5">
    <h1>{{ $author->name }}</h1>
    
    <form action="{{ route('quotes.store') }}" method="POST">
        {{ csrf_field() }}
        <label for="content">Add Quote:</label>
        <textarea name="content" id="content" cols="30" rows="4" class="form-control"></textarea>
        <input type="hidden" value="{{ $author->id }}" name="author_id">
        <input type="submit" class="btn btn-primary mt-3" value="Submit Quote">
    </form>
    </div>
    
    @if ($author->quotes->count() > 0)
    <div class="card-columns">
        @foreach ($author->quotes as $key => $quote)
        <div class="card p-3">
            <p class="card-text">{{ $quote->content }}</p>
        </div>
        @endforeach
    </div>
    @else
        <p>Submit some quotes for this author.</p>
    @endif
</div>
@endsection
