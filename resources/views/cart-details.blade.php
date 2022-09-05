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

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        <div class="bg-dark text-white">
            <a href="{{route('get-cart-product')}}" class="btn btn-success">Show Cart</a>
        </div>
    @endif
    <div class="row">

        <div class="col-md-12">

            <table>
                <tr>
                    <th>Name</th>
                    <th>image</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                @if($cartProducts->count() > 0)
                    @foreach($cartProducts as $c_product)
                        <tr>
                            <td>{{$c_product->name}}</td>
                        </tr>
                    @endforeach
                @else
                    <h1>No have Product in cart</h1>
                @endif
            </table>

        </div>
    </div>
</div>



</body>
</html>
