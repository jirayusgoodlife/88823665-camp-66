<form action="{{ url('/login') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
</form>
