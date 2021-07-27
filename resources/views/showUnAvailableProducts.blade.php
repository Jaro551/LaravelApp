@extends('layouts.app')
@section('content')
<h1>Niedostępne produkty</h1>

<hr>

<table class="col-md-12 table">
    <thead>
        <tr>
            <th scope="col">Id produktu</th>
            <th scope="col">Nazwa produktu</th>
            <th scope="col">Opis produktu</th>
            <th scope="col">Cena</th>
            <th scope="col">Zakupiony przez(Id klienta)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product['id']}}</th>
                <td>{{$product['name']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['client_id']}}</td>
            <tr>
        @endforeach
    </tbody>
</table>

@endsection

