@extends ('layouts.app')

@section ('content')
@if (count($authors) > 0)
@foreach ($authors as $author)
    <div class="container">

        <a class="btn btn-dark" href="/authors/{{$author->author_id}}">{{$author->name}}</a>
        <p></p>
    </div>
@endforeach
    @else
    <div class="alert-danger">
        NO AUTHORS <a href="/">GO BACk</a>
    </div>
    @endif
    @endsection