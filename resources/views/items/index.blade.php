@extends ('layouts.app')

@section ('content')
@if (count($items) > 0)
@foreach ($items as $item)
    <div class="container">
        <p class="card list-group-item">{{$item->item}}</p>
    </div>
@endforeach
    @else
<div class="container">
    <p class="alert-danger">NO ITEMS<a href="/authors"> GO BACK</a></p>
</div>
    @endif
    @endsection