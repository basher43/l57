@extends("frontend.master")
@section('main')
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="card">
                <div class="row">
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap">
                            <div>
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: {{$product->title}}"><title>{{$product->title}}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$product->title}}</text></svg>
                            </div> <!-- slider-product.// -->
                        </article> <!-- gallery-wrap .end// -->
                    </aside>

                    <aside class="col-sm-7">
                        <article class="card-body p-5">
                            <h3 class="title mb-3">{{ $product->title }}</h3>

                            <p class="price-detail-wrap">
                            <span class="price h3 text-warning">
                                <span class="currency">BDT </span>
                                <span class="num">
                                    @if($product->sale_price !== null && $product->sale_price > 0)
                                        <strike>{{ $product->price }}</strike> {{ $product->sale_price }}
                                    @else
                                        {{ $product->price }}
                                    @endif
                                </span>
                            </span>
                            </p> <!-- price-detail-wrap .// -->

                            <dl class="item-property">
                                <dt>Description</dt>
                                <dd><p>{{ $product->description }}</p></dd>
                            </dl>

                            <hr>

                            <form action="{{route('addtocart')}}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-lg btn-outline-secondary">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                            </form>
                        </article> <!-- card-body.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->

        </div>

    </div>

@stop
