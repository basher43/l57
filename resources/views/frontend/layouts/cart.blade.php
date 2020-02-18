@extends("frontend.master")
@section('main')
    <div class="container">
        <div class="border">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Cart</h1>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                            @foreach($cart as $product)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product['title']}}</td>
                                    <td>{{$product['quantity']}}</td>
                                    <td>{{number_format($product['price'], 2)}}</td>
                                    <td>{{number_format($product['total_price'], 2)}}</td>
                                    <td><a href="{{route('remove.cart',$product['product_id'])}}">Remove</a></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="border-right-0"></td>
                                    <td class="border-right-0 border-left-0"></td>
                                    <td class="border-left-0"></td>
                                    <td>Grand Total</td>
                                    <td>{{$grand_total}}</td>
                                    <td></td>
                                </tr>
                        </tbody>
                    </table>
                    <button><a href="{{route('clear.cart')}}">Clear Cart</a></button>
                </div>

            </div>
        </div>
    </div>

@stop
