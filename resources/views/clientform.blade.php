@extends('layouts.app')
@section('content')
<h1>Podaj dane wymagane do zakupu</h1>
<hr>
<form action="clientform" method="POST">
    @csrf
    <div class="col-md-4">
        <label class="form-label" for="name">Imię:</label>
        <input class="form-control" type="text" name="name">
        <span style="color: red;">@error('name'){{$message}}@enderror</span>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="surname">Nazwisko:</label>
        <input class="form-control" type="text" name="surname">
        <span style="color: red;">@error('surname'){{$message}}@enderror</span>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="phone_number">Numer telefonu:</label>
        <input class="form-control" type="text" name="phone_number">
        <span style="color: red;">@error('phone_number'){{$message}}@enderror</span>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="email">E-mail</label>
        <input class="form-control" type="email" name="email">
        <span style="color: red;">@error('email'){{$message}}@enderror</span>
    </div>

    <div class="col-md-4">
        <label class="form-label" for="address">Adres:</label>
        <input class="form-control" type="text" name="address">
        <span style="color: red;">@error('address'){{$message}}@enderror</span>
    </div>

    <div class="col-md-2">
        <label class="form-label" for="date_of_birth">Data urodzenia:</label>
        <input class="form-control" type="date" name="date_of_birth">
        <span style="color: red;">@error('date_of_birth'){{$message}}@enderror</span>
    </div>

    <div style="margin-top:10px;">
        <button class="btn btn-success" type="submit">Kup teraz</button>
    </div>
</form>

@endsection