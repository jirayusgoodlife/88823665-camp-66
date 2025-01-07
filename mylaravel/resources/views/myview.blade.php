<h1><?php echo $name; ?></h1>
<h1>{{ $user }}</h1>

@method('post')
<form action='{{ url('/myprocess') }}' method='post'>
    {{ csrf_field() }}
    @csrf
    <input type='text' name="test"/>
    <button type="submit">go</button>
</form>
