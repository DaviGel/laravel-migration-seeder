<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Train station</title>
        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="container py-5">
            <ul class="list-unstyled">
                @foreach ($trains as $train)
                    <li>Partenza: {{ $train['stazione_di_partenza'] }} | Arrivo: {{ $train['stazione_di_arrivo'] }} | Data di partenza: {{ $train['data_di_partenza'] }} | Data di arrivo: {{ $train['data_di_arrivo'] }} | Codice treno: {{ $train['codice_treno'] }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
