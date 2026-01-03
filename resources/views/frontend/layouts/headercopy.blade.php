@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"> 
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="order-md-last">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-primary">Your cart</span>
      <span class="badge bg-primary rounded-pill">
        {{ count(session('cart', [])) }}
      </span>
    </h4>

  <ul class="list-group mb-3">
  @php $total = 0; @endphp
  @foreach(session('cart', []) as $id => $item)
    @php $total += $item['price'] * $item['quantity']; @endphp
    <li class="list-group-item d-flex justify-content-between lh-sm">
      <div>
        <h6 class="my-0">{{ $item['title'] }}</h6>
        <small class="text-body-secondary">Qty: {{ $item['quantity'] }}</small>
        <br>
        <a href="{{ route('cart.remove', $id) }}" class="text-danger">Remove</a>
      </div>
      <span class="text-body-secondary">${{ $item['price'] * $item['quantity'] }}</span>
    </li>
  @endforeach
  <li class="list-group-item d-flex justify-content-between">
    <span>Total (USD)</span>
    <strong>${{ $total }}</strong>
  </li>
</ul>



    <a href="{{ route('cart.index') }}" class="w-100 btn btn-primary btn-lg">Continue to checkout</a>
  </div>
</div>

</div>

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
  <div class="offcanvas-header justify-content-center">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Search</span>
      </h4>
      <form role="search" action="index.html"  action="{{ route('search') }}" method="get" class="d-flex mt-3 gap-0">
        <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="Search for anything" aria-label="What are you looking for?">
        <button class="btn btn-dark rounded-end rounded-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</div>

<header>
  <div class="container-fluid">
    <div class="row py-3 border-bottom">

      <div class="col-sm-4 col-lg-3 text-center text-sm-start">
        <div class="main-logo">
          <a href="{{ route("home") }}">
            <h1 class="img-fluid  font-semibold">Upucanada</h1>
          </a>
        </div>
      </div>

      <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
        <div class="search-bar row bg-light p-2 my-2 rounded-4">
          <div class="col-md-4 d-none d-md-block">
            <select name="cat_id" id="cat_id" class="form-select border-0 bg-transparent">
              @foreach($category as $cat)
              <option>All Categories</option>
              <option value="{{ $cat->id }}">{{ $cat->category }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-11 col-md-7">
            <form id="search-form" class="text-center" action="{{ route('search') }}" method="get">
              <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for anything " />
            </form>
          </div>
          <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
            </svg>
          </div>
        </div>
      </div>

    <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-4 align-items-center mt-4 mt-sm-0">

  {{-- Support Info (only for xl and up) --}}

  {{-- Auth / Cart / Search --}}
  <ul class="d-flex align-items-center list-unstyled m-0">

    {{-- Sample Icon --}}
   

    {{-- Guest Links --}}
    @guest
    <li><a href="{{ route('login') }}" class="dropdown-item p-2">Become a Member</a></li>
    <!-- <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li> -->
    @endguest

    {{-- Authenticated Links --}}
    @auth
    <li>
      <a href="{{ route('dashboard') }}" class="dropdown-item  p-4" style="font-weight: bold;;">My Account</a>
    </li>
    <li>
      <a href="{{ route('logout') }}" class="dropdown-item"
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
    @endauth

    {{-- Cart (Mobile only) --}}
    <li class="d-lg-none">
      <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
        <svg width="24" height="24" viewBox="0 0 24 24">
          <use xlink:href="#cart" />
        </svg>
      </a>
    </li>

    {{-- Search (Mobile only) --}}
    <li class="d-lg-none">
      <a href="#" class="rounded-circle bg-light p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
        <svg width="24" height="24" viewBox="0 0 24 24">
          <use xlink:href="#search" />
        </svg>
      </a>
    </li>

  </ul>

  {{-- Cart Display for Desktop --}}
  <div class="cart text-end d-none d-lg-block dropdown">
    <button class="border-0 bg-transparent d-flex flex-column gap-1 lh-1" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
      <span class="fs-6 text-muted dropdown-toggle">Your Cart</span>
      <!-- <span class="cart-total fs-5 fw-bold">$1290.00</span> -->
    </button>
  </div>

</div>


    </div>
  </div>
  <div class="container-fluid">
    <div class="row py-3">
      <div class="d-flex  justify-content-center justify-content-sm-between align-items-center">
        <nav class="main-menu d-flex navbar navbar-expand-lg">

          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-header justify-content-center">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">


              <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu" aria-labelledby="pages">
                    @guest
                    <li><a href="{{ route('login') }}" class="dropdown-item p-2">Become a Member</a></li>
                    <!-- <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li> -->
                    @endguest
                    @auth
                    <li><a href="{{ route('dashboard') }}" class="dropdown-item font-bold">My Account</a></li>
                    <li><a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                      </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    @endauth
                    <li><a href="index.html" class="dropdown-item">Shop </a></li>
                    <li><a href="index.html" class="dropdown-item">Single Product </a></li>
                    <li><a href="index.html" class="dropdown-item">Cart </a></li>
                    <li><a href="index.html" class="dropdown-item">Checkout </a></li>
                    <!-- <li><a href="index.html" class="dropdown-item">Blog </a></li> -->
                    <li><a href="index.html" class="dropdown-item">Single Post </a></li>
                    <li><a href="index.html" class="dropdown-item">Styles </a></li>
                    <li><a href="index.html" class="dropdown-item">Contact </a></li>
                    <li><a href="index.html" class="dropdown-item">Thank You </a></li>




                    <li><a href="index.html" class="dropdown-item">404 Error </a></li>
                  </ul>
                </li>

                <li class="nav-item active">
                  <a href="{{ route('events') }}" class="nav-link">Events</a>
                </li>
              
                  <li class="nav-item dropdown">
                  <a href="#men" class="nav-link">Gallery </a>
                </li>  
                <li class="nav-item">
                  <a href="{{ route('marketPlace') }}" class="nav-link">MarketPlace</a>
                </li>

                 <li class="nav-item">
                  <a href="{{ route('aboutus') }}" class="nav-link">About us</a>
                </li>

              </ul>

            </div>

          </div>
      </div>
    </div>
  </div>
</header>










































<section id="latest-blog" class="py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="section-header d-flex align-items-center justify-content-between my-5">
        <h2 class="section-title">Upcoming Events</h2>
        <div class="btn-wrap align-right">
          <a href="" class="d-flex align-items-center nav-link">
            Read All Articles
            <svg width="24" height="24">
              <use xlink:href="#arrow-right"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="row">
      @foreach ($events as $event)
      <div class="col-md-4">
        <article class="post-item card border-0 shadow-sm p-3">
          <div class="image-holder zoom-effect">
            <a href="{{ route("subevent",$event->id) }}">

              <img src="{{ asset( $event->photo) }}" alt="{{ $event->name }}" class="card-img-top">
            </a>
          </div>
          <div class="card-body">
            <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
              <div class="meta-date">
                <svg width="16" height="16">
                  <use xlink:href="#calendar"></use>
                </svg>
                {{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}
              </div>
              <div class="meta-categories">
                <svg width="16" height="16" class="post-title">
                  <use xlink:href="#category"></use>
                </svg>
                {{ $event->name ?? 'Uncategorized' }}
              </div>
            </div>
            <div class="post-header">
              <h3 class="post-title">
                <a href="" class="text-decoration-none">
                  {{ Str::limit($event->title, 50) }}
                </a>
              </h3>
              <p>{{ Str::limit(strip_tags($event->eventinfo), 53) }}</p>
            </div>
          </div>
        </article>
      </div>
      @endforeach
    </div>



  </div>
</section>

<section class="py-5">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">

        <div class="bootstrap-tabs product-tabs">
          <div class="tabs-header d-flex justify-content-between border-bottom my-5">
            <h3>Trending Products</h3>
            <nav>
              <!-- <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a href="#" class="nav-link text-uppercase fs-6 active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all">All</a>
                <a href="#" class="nav-link text-uppercase fs-6" id="nav-fruits-tab" data-bs-toggle="tab" data-bs-target="#nav-fruits">Fruits & Veges</a>
                <a href="#" class="nav-link text-uppercase fs-6" id="nav-juices-tab" data-bs-toggle="tab" data-bs-target="#nav-juices">Juices</a> -->
              </div>
            </nav>
          </div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
              <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                @foreach($product as $item)
                <div class="col mb-4">
                  <div class="product-item">
                    <a href="#" class="btn-wishlist">
                      <svg width="24" height="24">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </a>
                    <figure>
                      <a href="#" title="{{ $item->title }}">
                        <img src="{{ asset($item->photo) }}" alt="{{ $item->title }}" class="tab-image" width="230" height="200">
                      </a>


                    </figure>
                    <h3>{{ $item->title }}</h3>
                   
                    <span class="rating">
                      <svg width="24" height="24" class="text-primary">
                        <use xlink:href="#star-solid"></use>
                      </svg>
                      {{ $item->rating ?? '4.5' }}
                    </span>
                    <span class="price">${{ number_format($item->price, 2) }}</span>

                    <div class="d-flex align-items-center justify-content-between">
                      <div class="input-group product-qty">
                        
                     
                      
                      </div>
                    <form action="{{ route('cart.add', $item->id) }}" method="POST">
  @csrf
  <input type="hidden" name="quantity" value="1">
  <button type="submit" class="btn btn-primary">Add to Cart
    <iconify-icon icon="uil:shopping-cart"></iconify-icon>
  </button>
</form>

                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <!-- / product-grid -->

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>




<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0"><i class="text-primary me-2"></i>UpuCanada</h2>
    </a>
   
    
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active" style="color: black;">Home</a>
            <a href="{{ route('marketPlace') }}" class="nav-item nav-link">Market Place</a>
            <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
            <a href="{{ route('aboutus') }}" class="nav-item nav-link">About Us</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    @guest
                    <a href="{{ route('login') }}" class="dropdown-item">Become a Member</a>
                    @endguest

                    @auth
                    <a href="{{ route('dashboard') }}" class="dropdown-item fw-bold">My Account</a>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    @endauth

                    <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                    <a href="{{ route('marketPlace') }}" class="dropdown-item">Market Place</a>
                    <a href="{{ route('events') }}" class="dropdown-item">Events</a>
                    <a href="{{ route('aboutus') }}" class="dropdown-item">About Us</a>
                </div>
            </div>

            <a class="nav-item nav-link">Contact</a>
        </div>

        @guest
        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-inline-block">
            Become a Member <i class="fa fa-arrow-right ms-2 mt-3"></i>
        </a>
        @endguest
    </div>

    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>























































<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0"><i class="text-primary me-2"></i>UpuCanada</h2>
    </a>
   
    
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active" style="color: black;">Home</a>
            <a href="{{ route('marketPlace') }}" class="nav-item nav-link">Market Place</a>
            <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
            <a href="{{ route('aboutus') }}" class="nav-item nav-link">About Us</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    @guest
                    <a href="{{ route('login') }}" style="background-color: #e6792b;" class="dropdown-item">Become a Member</a>
                    @endguest

                    @auth
                    <a href="{{ route('dashboard') }}" class="dropdown-item fw-bold">My Account</a>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    @endauth

                    <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                    <a href="{{ route('marketPlace') }}" class="dropdown-item">Market Place</a>
                    <a href="{{ route('events') }}" class="dropdown-item">Events</a>
                    <a href="{{ route('aboutus') }}" class="dropdown-item">About Us</a>
                </div>
            </div>

            <a class="nav-item nav-link">Contact</a>
        </div>

        @guest
        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-inline-block">
            Become a Member <i class="fa fa-arrow-right ms-2 mt-3"></i>
        </a>
        @endguest
    </div>

    <!-- Hidden Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>
