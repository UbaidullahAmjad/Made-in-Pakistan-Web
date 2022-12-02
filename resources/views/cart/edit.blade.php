<form action="{{route('cart.update', $item->rowId)}}" method="post">
    @csrf
    @method('put')
    <input type="number" value="{{$item->qty}}" name=quantity>
    <button type="submit">Update Qty</button>
</form>