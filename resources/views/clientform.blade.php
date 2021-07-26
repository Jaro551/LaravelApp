<h1>Podaj dane wymagane do zakupu</h1>

<form action="clientform" method="POST">
    @csrf
    
    <label for="name">Imię:</label>
    <input type="text" name="name">

    <label for="name">Nazwisko:</label>
    <input type="text" name="surname">

    <label for="name">Numer telefonu:</label>
    <input type="text" name="phone_number">

    <label for="name">E-mail</label>
    <input type="email" name="email">

    <label for="name">Adres:</label>
    <input type="text" name="address">

    <label for="name">Data urodzenia:</label>
    <input type="date" name="date_of_birth">

    <button type="submit">Kup teraz</button>
</form>