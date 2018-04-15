<form method="post" action="/edit/{{$product->id}}">
@csrf
actuell Product name: <input type="text" name="name" value="{{$product->name}}" placeholder="enter the name">
<br>
actuell Product price: <input type="text" name="price" value="{{$product->price}}" placeholder="enter the price">
<br>
<input type="submit" value="edit">
</form>