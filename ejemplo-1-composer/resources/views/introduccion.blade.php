<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | Intro a blade</title>
</head>
<body>
    <h1>Introducción a blade</h1>
    <h4>Ejemplo 1 con php</h4>
    @php
        $var = '<b>Hola</b>';
        echo $var. '<br>';
    @endphp
    <p>_______________</p>
    <h4>Ejemplo 1 con blade</h4>
    {{ $var }} <br>
    {!! $var !!}
    <p>_______________</p>
    <h4>Ejemplo 2 con php</h4>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Precio</th>
                <th>Divisa</th>
                <th>Taxas</th>
                <th>Descuento</th>
            </tr>
        </thead>
        <tbody>
            @php
                foreach ($concepts as $c) {
                    echo '<tr>';
                        if (strlen($c['concept']) < $maxChars) {
                            echo '<td>'. $c['concept'] .'</td>';
                        }
                        else {
                            echo '<td>'. substr($c['concept'], 0, $maxChars) .'</td>';
                        }
                        echo '<td>'. $c['price'] .'</td>';
                        echo '<td>'. $c['currency'] .'</td>';
                        echo '<td>'. $c['taxes'] .'</td>';
                        echo '<td>'. $c['discount'] .'</td>';
                    echo '</tr>';
                }
            @endphp
        </tbody>
    </table>
    <p>_______________</p>
    <h4>Ejemplo 2 con blade</h4>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Precio</th>
                <th>Taxas</th>
                <th>Descuento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($concepts as $c)
                <tr>
                    <td>
                        @if (strlen($c['concept']) < $maxChars)
                            {{ $c['concept'] }}
                        @else
                            {{ substr($c['concept'], 0, $maxChars) }}
                        @endif
                    </td>
                    <td>{{ $c['price'] }} {{ $c['currency'] }}</td>
                    <td>{{ $c['taxes'] }}</td>
                    <td>{{ $c['discount'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>_______________</p>
    <h4>Ejemplo 3 con blade</h4>
    @guest {{-- Solo si no estas autenticado podras ver la tabla --}}
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Concepto</th>
                    <th>Precio</th>
                    <th>Taxas</th>
                    <th>Descuento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($concepts as $c)
                    <tr>
                        <td>
                            @if (strlen($c['concept']) < $maxChars)
                                {{ $c['concept'] }}
                            @else
                                {{ substr($c['concept'], 0, $maxChars) }}
                            @endif
                        </td>
                        <td>{{ $c['price'] }} {{ $c['currency'] }}</td>
                        <td>{{ $c['taxes'] }}</td>
                        <td>{{ $c['discount'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endguest
    <p>_______________</p>
    <h4>Ejemplo 4 con blade</h4>
    @if ($year == date('Y'))
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Concepto</th>
                    <th>Precio</th>
                    <th>Taxas</th>
                    <th>Descuento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($concepts as $c)
                    <tr>
                        <td>
                            @if (strlen($c['concept']) < $maxChars)
                                {{ $c['concept'] }}
                            @else
                                {{ substr($c['concept'], 0, $maxChars) }}
                            @endif
                        </td>
                        <td>{{ $c['price'] }} {{ $c['currency'] }}</td>
                        <td>{{ $c['taxes'] }}</td>
                        <td>{{ $c['discount'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
    <script>
        var concepts = JSON.parse('{!! $jsonConcepts !!}');
    </script>
</html>
