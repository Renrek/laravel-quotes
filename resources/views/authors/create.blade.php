@extends('layouts.app')

@section('content')
<div class="container">
<div class="card p-3">
<h1>Add Author:</h1>
    <hr>
    <form action="{{ route('authors.store') }}" method="POST">
        {{ csrf_field() }}
        <label for="name">Author Name:</label>
        <input type="text" name="name" id="name" class="form-control" />
        <input type="submit" class="btn btn-primary mt-3" value="Submit Author">
    </form>
</div>
    
</div>
@endsection
