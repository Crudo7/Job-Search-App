
@extends('layouts.app')

@section('content')

<div class="offers">
    <table class="tableOffer">
        <thead>
            <tr>
                <th class="borders">CREATE</th>
                <th class="borders">OFFER</th>
                <th class="borders">WORKSTATION</th>
                <th class="borders">STATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td class="borders">{{$offer->created_at}}</td>
                    <td class="borders">{{$offer->offers}}</td>
                    <td class="borders">{{$offer->workstation}}</td>
                    <td class="borders">{{$offer->state}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
