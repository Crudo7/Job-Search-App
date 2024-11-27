
@extends('layouts.app')

@section('content')

<div>
    <body>
        <table class="tableOffer">
            <thead>
                <tr class="columnTable">
                    <th>Columna 1</th>
                    <th>Columna 2</th>
                    <th>Columna 3</th>
                    <th>Columna 4</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                <tr>
                    <td>Valor 1</td>
                    <td>Valor 2</td>
                    <td>Valor 3</td>
                    <td>Valor 4</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</div>
@endsection
