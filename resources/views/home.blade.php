<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>
        Home
    </h1>

    <h2>
        <a href="{{ route('about-us') }}">
            About us
        </a>
    </h2>

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

</body>
</html>