<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <div class="bg-dark text-white">
        <a href="{{route('get-cart-product')}}" class="btn btn-success">Show Cart</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>qty</th>
                    <th>name</th>
                </tr>
                @php($sum = 0)
                @foreach($carts as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>
                            <img style="width: 65px;height: 65px;border-radius: 8px;" src="{{$product->attributes->image}}" alt="">
                        </td>
                    </tr>

                    @php($sum = $sum + $product->price)
                @endforeach
                <tfoot>
                    <table>
                        <tr>
                            <th>Total</th>
                            <td>{{$sum}}</td>
                        </tr>
                    </table>
                </tfoot>
            </table>

        </div>

    </div>
</div>

</body>
</html>
