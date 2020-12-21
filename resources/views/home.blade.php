<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Prima app Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1>Hello World! {{ $nome }} {{$cognome}}</h1>

        <ul>
            @foreach ($studenti as $studente)
                <li>{{$studente}}</li>
            @endforeach

            <br>

            @forelse ($giocatori as $giocatore)
                @if ($giocatore === 'Ronaldo' && in_array("Totti", $giocatori))
                    <li>{{'Zidane'}}</li>
                @endif
                <li>{{$giocatore}}</li>
            @empty
                <p>nessun giocatore presente</p>
            @endforelse


            @php
                $i = 0;
            @endphp
            @while ($i <count($giocatori) )
                @php
                    $i++;
                @endphp
                    <h1>{{'Siamo al ciclo: '. $i}}</h1>
            @endwhile
        </ul>
    </body>
</html>
