
@extends('layouts.app')

@section('content')

<div class="offers">
    <table class="tableOffer">
        <thead>
            <tr>
                <th>Create</th>
                <th>Offer</th>
                <th>Workstation</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
                <tr>
                    <td>{{$offer->created_at}}</td>
                    <td>{{$offer->offers}}</td>
                    <td>{{$offer->workstation}}</td>
                    <td>{{$offer->state}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
