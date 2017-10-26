@extends('layouts.app')
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success"> {!! Session::get('success') !!} </div>    
 @endif
<div class="container" style="margin-top:1px;">
    <div class="row" style="margin: 0px 20px;">
        <h3 style="color: black;">Shop Now!</h3>
            @foreach($products as $product)
        <div class="col-md-3">
            <div class="pro-item" style="padding: 2% 2% 2% 2%; ">
                <div class="post-img-content">
                    <img src="/img/{{ $product -> product_image }} " class="img-responsive" />
                    <span class="post-title">
                        {{ $product -> product_name }} <br>
                    </span>
                    <span class="round-tag">new</span>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-6">
                            <h5>Price</h5>
                            &#8369;&nbsp;{{ $product -> product_price }} <br>
                            {{ $product -> description }} 
                        </div>
                        <div class="rating hidden-sm col-md-6">
                            <h5 class="price-text-color"></h5>
                        </div>
                    </div>
                    <div class="separator clear-left">
                            <div class="content">
                                    <form method="post" action="/home/add">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                        <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                        <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                        <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
                                        <input type="hidden" name="product_image" value="{{ $product -> product_image }}">
                                        <button class="btn btn-warning" style="margin-top: 10px;"> Add to Cart </button>
                                    </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach 
    </div>
</div> 
<!--     <section id="trend" class="bg-faded" style="margin-top: -150px;">
            <h3>Newly Trends</h3>
                @if (Session::has('success'))
                    <div class="alert alert-success"> {!! Session::get('success') !!} </div>    
                @endif
                        @foreach($products as $product)
                            <div class="content">
                                Name: {{ $product -> product_name }} <br>
                                Price: {{ $product -> product_price }} 
                                    <form method="post" action="/home/add">
                                    {{ csrf_field() }}
                                        <img src="/img/{{ $product -> product_image }} " width="250px" height="300px">
                                        <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                        <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                        <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                        <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
                                        <input type="hidden" name="product_image" value="{{ $product -> product_image }}">
                                        <button class="btn btn-warning" style="margin-top: 350px; margin-left: -100px;"> Add to Cart </button>
                                    </form>
                            @endforeach
                        </div>
                </div>
    </section>
 -->
    <!-- Portfolio Grid -->
    <section id="portfolio" class="bg-faded" style="margin-top: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Categories</h3>
                    <h5 class="section-subheading text-muted">Find your stuffs now!.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ url('/product') }}" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus faa-3x"></i>
                            </div>
                        </div>
                        <img src="img/products/men/01-thumbnail.jpg" style="width: 400px; height: 270px;" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Men's</h4>
                        <p class="text-muted">Apparel</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ url('/item') }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/products/women/girl.jpg " style="height: 270px; width: 400px;" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Women's</h4>
                        <p class="text-muted">Apparel</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ url('/product') }}" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus faa-3x"></i>
                            </div>
                        </div>
                        <img src="img/products/teen/teen.jpg" style="width: 400px; height: 270px;" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Teen</h4>
                        <p class="text-muted">Fashion</p>
                    </div>
                </div>
    
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ url('/furniture') }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/products/home/home.jpg" style="height: 270px; width: 400px;" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Home</h4>
                        <p class="text-muted">Furniture</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ url('/electronic') }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/products/electronics/electronic.png" style="width: 400px; height: 270px;" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Electronics</h4>
                        <p class="text-muted">Latest</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="{{ url('/baby') }}" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/products/baby/baby.jpg" style="height: 270px; width: 400px;" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Baby</h4>
                        <p class="text-muted">Stuffs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery Version 3.1.1 -->
    <script src="js/jquery.js"></script>

    <!-- Tether -->
    <script src="js/tether.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel()
    </script>
        <!-- <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                @if (Session::has('success'))
                    <div class="alert alert-success"> {!! Session::get('success') !!} </div>    
                @endif
                <div class="panel-body">
                    You are logged in!
                    <br><br>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> Product Name </th>
                                <th> Price </th>
                                <th> Shop </th>
                                <th> &nbsp; </th>
                            </tr>
                        </thead>
                        <tbody> 
                        @foreach($products as $product)
                            <tr>
                                <td> {{ $product -> product_name }} </td>
                                <td> {{ $product -> product_price }} </td>
                                <td>
                                    <form method="post" action="/home/add">
                                    {{ csrf_field() }}
                                        <img src="/img/{{ $product -> product_image }} " width="250px" height="300px">
                                        <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                        <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                        <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                        <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
                                        <input type="hidden" name="product_image" value="{{ $product -> product_image">
                                        <button class="btn btn-warning"> Add to Cart </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div> -->

@endsection
