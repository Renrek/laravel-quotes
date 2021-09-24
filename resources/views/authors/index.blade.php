@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-columns">
    @foreach ($authors as $author)
        <div class="card p-3">
            <h3>{{ $author->name}}</h3>
            <a href="{{ route('authors.show', $author->id) }}" class="btn btn-primary btn-sm">View Details</a>
        </div>
    @endforeach
    </div>
</div>
@endsection
