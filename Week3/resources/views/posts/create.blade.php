<h1>Dodaj post</h1>
<form action="/posts" method="POST">
    @csrf <!-- Magia Laravela: Zabezpieczenie przed atakami CSRF. Bez tego formularz nie zadziała! -->
    
    <input type="text" name="title" placeholder="Tytuł"><br>
    <textarea name="content" placeholder="Treść"></textarea><br>
    <button type="submit">Zapisz</button>
</form>