@extends("frontend.layouts.master")
@section('main')

@include('frontend.partials._hero')

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: {{$product->title}}"><title>{{$product->title}}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$product->title}}</text></svg>
                        <div class="card-body">
                            <p class="card-text">{{$product->title}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <form action="{{route('addtocart')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Add to cart</button>
                                    </form>
                                </div>
                                <strong class="text-muted">BDT {{$product->price}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>

    </div>

@stop
