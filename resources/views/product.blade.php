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
    <div class="row"><div class="col-md-12">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="{{$product->image}}" alt="{{$product->title}}">
                            </div>
                            <div class="card-body">
                                <h4>{{$product->title}}</h4>
                                <h5>Price : {{$product->price}}</h5>
                                <h5>Qty : {{$product->quantity}}</h5>
                                <form action="{{route('add-to-cart')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="number" name="qty">
                                    <button type="submit" class="btn btn-success">Add To Cart</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

</body>
</html>
