@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-image"  src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
                    <h3>{{$product['name']}}</h3>
                    <p>{{$product['category']}}</p>
                    <p>{{$product['description']}}</p>
                    <h2>Price {{$product['price']}}</h2>
                    <button class="btn btn-primary">Add To Cart</button>
                    <button class="btn btn-primary">BUY NOW</button>
   
        </div>
        </div>
    </div>
</div>
@endsection