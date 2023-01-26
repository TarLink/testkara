<form action="{{url('store-product')}}" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="description">Description:</label><br>
    <textarea  name="description" rows="4" cols="50">
    </textarea><br>

    <label for="producers">Producers:</label><br>
    <select name="producers" id="producers">
        @foreach($producers as $producer)
            <option value="{{$producer->id}}">{{$producer->name}}</option>
        @endforeach
    </select><br>

    <input type="submit" value="Submit">
</form> 