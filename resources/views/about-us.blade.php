@extends('layouts.app')

@section('title', 'About Us')
@section('main-content')
    <h1>
        About us
    </h1>

    @dump($teamMembers)
    @foreach ($teamMembers as $person )
        <article>
            <div>
                <h2>
                    {{ $person['name'] }}
                </h2>
                <p>
                    {{ $person['role'] }}
                </p>
            </div>
        </article>
    @endforeach
@endsection