<form action="/mail-send" method="post">
    @csrf
    <label for="">Votre email</label>
    <input type="text" name="email">
    <label for="mail">Contactez-nous</label>
    <textarea name="mail" id="" cols="30" rows="10">
    </textarea>
    <button type="submit">Envoyer</button>
</form>