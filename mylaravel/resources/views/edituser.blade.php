
<form action="{{ url('/user') }}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="********">
    <button type="submit">update</button>
</form>
