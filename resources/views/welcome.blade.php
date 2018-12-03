@extends ('layouts.app')

@section ('content')
            <a href="/json_" class="btn btn-dark">This button will return json</a>
            <a href="/authors" class="btn btn-dark">Authors of items</a>
            @if (!Auth::guest())

                <p></p>
                <a href="/logonly/32">Holy link</a>
            @endif
@endsection