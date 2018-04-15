<table>
@foreach($products as $item)
<tr>
    <td>productname : {{$item->name}}</td>
    <td>productPrice : {{$item->price}}</td>
    <td><a href="/edit/{{$item->id}}">edit</td>
    <td><a href="/add/{{$item->id}}">Delete</td>
</tr>
@endforeach
</table>

