<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;

        }
        tr, td{
            border: 1px solid black;
        }
        

        </style>
    <title>Document</title>
</head>
<body>
    <table>
        
        @foreach(Cart::content() as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->qty}}</td>
            <td><a href={{route('cart.edit', $item->rowId)}}>Edit</a></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>