@extends('layouts.app')

@section('title', 'Homepage')
@section('main-content')
    @dump($numbers)

    @foreach ( $numbers as $number  )
        @if ( $loop->odd )
            <h5>
                {{ $number }} - {{ $loop->iteration }}
            </h5>
        @else
            <h3>
                {{ $number }} - {{ $loop->iteration }}
            </h3>
        @endif
    @endforeach

    <h2>
        {{ $name }}
    </h2>
    <p>
        {{ $content }}
    </p>
@endsection