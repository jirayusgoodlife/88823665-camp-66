<form ation="{{ url('/register'); }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="********">
    <button type="submit">register</button>
</form>
