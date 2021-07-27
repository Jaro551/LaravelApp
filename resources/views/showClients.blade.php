@extends('layouts.app')
@section('content')
<h1>Klienci</h1>
<hr>

<table class="col-md-12 table">
    <thead>
        <tr>
            <th scope="col">Id Klienta</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Numer telefonu</th>
            <th scope="col">E-mail</th>
            <th scope="col">Adres</th>
            <th scope="col">Data urodzenia</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client['id']}}</th>
                <td>{{$client['name']}}</td>
                <td>{{$client['surname']}}</td>
                <td>{{$client['phone_number']}}</td>
                <td>{{$client['email']}}</td>
                <td>{{$client['address']}}</td>
                <td>{{$client['date_of_birth']}}</td>
            <tr>
        @endforeach
    </tbody>
</table>

@endsection