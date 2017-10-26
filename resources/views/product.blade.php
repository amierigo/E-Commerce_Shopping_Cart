@extends('layouts.app')
@section('content')

	<!-- @if (Session::has('success'))
	    <div class="alert alert-success"> {!! Session::get('success') !!} </div>    
	 @endif
		<div class="container">
			<div class="row">
				<h3 style="color: red;">Men's Apparel</h3>
				@foreach($products as $product)
					<div class="col-xs-18 col-sm-4 col-md-3">
						<div class="productbox">
							<div class="imgthumb img-responsive">
								<img src="/img/{{ $product -> product_image }} " style="width: 300px;height: 230px;" class="img-responsive" />
							</div>
							<div class="caption">
								{{ $product -> product_name }} <br>
								&#8369;&nbsp;{{ $product -> product_price }} <br>
                            	{{ $product -> description }} 
	                            	<form method="post" action="/home/add">
	                                    {{ csrf_field() }}
	                                        <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
	                                        <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
	                                        <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
	                                        <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
	                                        <input type="hidden" name="product_image" value="{{ $product -> product_image }}">
	                                        <button class="btn btn-warning" style="margin-left:200px;"> Add to Cart </button>
	                                </form>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div> -->
	<section id="portfolio" class="bg-faded" style="margin-top: -150px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Men's Apparel</h3>
                    <h5 class="section-subheading text-muted">Find your stuffs now!</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm3 portfolio-item">
                    <img src="img/products/men/men1.jpg" style="height: 270px; width: 295px;" class="img-fluid" alt="">
	                        <form method="post" action="/home/add">
	                            {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                    <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                    <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                    <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
                                    <input type="hidden" name="product_image" value="{{ $product -> product_image }}">
                    <div class="portfolio-caption" style="border-top: 1px solid blue;">
                        <h4>Men's</h4>
                        <p class="text-muted">Apparel</p>
                        <button class="btn btn-warning"> Add to Cart </button>
                        </form>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-3 col-sm3 portfolio-item">
                    <img src="img/products/men/men2.jpg" style="height: 270px; width: 295px;" class="img-fluid" alt="">
	                        <form method="post" action="/home/add">
	                            {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                    <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                    <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                    <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
                                    <input type="hidden" name="product_image" value="{{ $product -> product_image }}">
                    <div class="portfolio-caption" style="border-top: 1px solid blue;">
                        <h4>Men's</h4>
                        <p class="text-muted">Apparel</p>
                        <button class="btn btn-warning"> Add to Cart </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-3 col-sm3 portfolio-item">
                    <img src="img/products/men/men1.jpg" style="height: 270px; width: 295px;" class="img-fluid" alt="">
	                        <form method="post" action="/home/add">
	                            {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                    <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                    <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                    <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
                                    <input type="hidden" name="product_image" value="{{ $product -> product_image }}">
                    <div class="portfolio-caption" style="border-top: 1px solid blue;">
                        <h4>Men's</h4>
                        <p class="text-muted">Apparel</p>
                        <button class="btn btn-warning"> Add to Cart </button>
                        </form>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-3 col-sm3 portfolio-item">
                    <img src="img/products/men/men2.jpg" style="height: 270px; width: 295px;" class="img-fluid" alt="">
	                        <form method="post" action="/home/add">
	                            {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product -> product_id }}">
                                    <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                    <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                    <input type="hidden" name="quantity" value="{{ $product -> quantity }}">
                                    <input type="hidden" name="product_image" value="{{ $product -> product_image }}">
                    <div class="portfolio-caption" style="border-top: 1px solid blue;">
                        <h4>Men's</h4>
                        <p class="text-muted">Apparel</p>
                        <button class="btn btn-warning"> Add to Cart </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection