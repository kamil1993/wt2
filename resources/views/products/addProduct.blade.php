<form method="post" action="/add">
@csrf
new Product name: <input type="text" name="name" placeholder="enter the name">
<br>
new Product price: <input type="text" name="price" placeholder="enter the price">
<br>
<input type="submit" value="create">
</form>