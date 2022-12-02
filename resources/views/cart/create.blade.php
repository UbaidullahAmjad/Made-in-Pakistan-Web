<form action="{{route('cart.store')}}" method="post">
    @csrf
    <input type="number" name=id>
    <input type="text" name=name>
    <input type="number" name=price>
    <input type="number" name=qty>
    <button type="submit">Add to Cart</button>
</form>