
@extends('layouts.app')

@section('content')

<div class="offers">
    <table class="tableOffer">
        <thead>
            <tr>
                <th class="borders">ID</th>
                <th class="borders">CREATE</th>
                <th class="borders">OFFERS</th>
                <th class="borders">WORKSTATIONS</th>
                <th class="borders">STATES</th>
                <th class="borders">News</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td class="borders">{{$offer->id}}</td>
                    <td class="borders">{{$offer->created_at}}</td>
                    <td class="borders">{{$offer->offer}}</td>
                    <td class="borders">{{$offer->workstation}}</td>
                    <td class="borders">{{$offer->state}}</td>
                    <td class="borders">
                        <ul>
                        @forelse ($offer->updates as $update)
                            <li>{{$update->news}}</li>
                        @empty
                            <li>No hay seguimiento de la oferta</li>
                        @endforelse
                        </ul> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
