<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Categorises</h4>
                        <ul class="list-unstyled">
                            @foreach($categories as $category)
                                <li><a href="{{$category->slug}}">{{$category->name}}</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Menu</h4>
                    <ul class="list-unstyled">
                        @guest()
                            <li><a href="#" class="text-white">Create An Account</a></li>
                            <li><a href="#" class="text-white">Login</a></li>
                        @endguest
                        @auth()
                            <li><a href="#" class="text-white">My Profile</a></li>
                            <li><a href="#" class="text-white">Logout</a></li>
                        @endauth
                            <li><a href="#" class="text-white">Cart</a></li>
                            <li><a href="{{route('clear.cart')}}" class="text-white">Clear Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="{{route('frontend.home')}}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong>{{config('app.name')}}</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
