<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>
<body>
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

</body>
</html>