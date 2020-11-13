@extends('base')

@section('title')
Home
@endsection

@section('style')
<!-- None -->
@endsection

@section('content')
    <div class="jumbotron text-center">
      <h1 class="display-4">HERE BE DRAGONS!</h1>
      <p class="lead">Well, not really. I was just too lazy to list the hazards, and this is more accurate than nothing at all....</p>
      <hr>
      <blockquote>
        <p>Honesty is the first chapter in the book of wisdom</p>
        <footer>
            <small>Thomas Jefferson</small>
        </footer>
    </blockquote>
      <a class="btn btn-primary btn-lg" href="/about" role="button">Read More</a>
    </div>
    <div class="container">
    <div class="card-columns">
        <div class="card border-info mb-3">
            <div class="card-body">
                <h4 class="card-title">Camping</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="card border-info mb-3">
            <div class="card-body">
                <h4 class="card-title">Photography</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="card border-info mb-3">
            <div class="card-body">
                <h4 class="card-title">Programming</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="card border-info mb-3">
            <div class="card-body">
                <h4 class="card-title">Gaming</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="card border-info mb-3">
            <div class="card-body">
                <h4 class="card-title">Cooking</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>
        <div class="card border-info mb-3">
            <div class="card-body">
                <h4 class="card-title">General Curiosity</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>
    </div>
@endsection