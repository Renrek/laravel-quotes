@extends('layouts.app')

@section('content')
<div class="container">
<div class="jumbotron text-center">
      <h1 class="display-4">Welcome To My Repository!</h1>
      <p class="lead">The place where my projects call home.</p>
      <hr>
      <div class="card bg-dark text-light p-3">
@if($quote)
      <blockquote class="card-bodyquote">
            <p>{{ $quote->content }}</p>
            <footer class="blockquote-footer text-right text-info">
                <small>{{ $quote->author->name }}</small>
            </footer>
            </blockquote>
@else
Add a quote
@endif
      </div>
    </div>
   
</div>
@endsection
