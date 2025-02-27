<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    var count = 1;
    $('#test').on('click', function(){
        $('#test-table tbody').append(`<tr>
            <td>${count++}</td>
            <td>test</td>
        </tr>`);
    })
});
</script>
<h1>{{ session()->get('userdata') != null ?session()->get('userdata')->name : "" }}</h1>
<button id="test" type="button">+</button>
<table id="test-table">
    <thead>
        <tr>
            <td>1</td>
            <td>Name</td>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($users as $index => $user){
        ?>
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <?php $id =  ""; ?>
                <a href="{{ url('/user/' .  $user->id); }}"><button>edit</button></a>

                <form action="{{ url('/user_delete') }}" method="post">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
