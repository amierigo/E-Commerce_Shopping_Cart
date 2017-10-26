@extends('layouts.app')

@section ('content')
<?php $total_amount = 0; ?>
<div class="container">
	<table class="table table-bordered" style="text-align: center !important;">
	<thead>
		<tr>
			<th> Product Name </th>
			<th> Product Price </th>
			<th> Amount </th>
			<th> Quantity </th>
			<th> Remove from your cart</th>
		</tr>
		</thead>
		<tbody>
		@foreach ($products as $product)
			<tr>
				<td> {{$product -> product_name}} </td>
				<td> &#8369;&nbsp;{{$product -> product_price }} </td>
				<td>
					<?php
						$price = $product -> product_price;
						$quantity = $product -> quantity;

						$subtotal = $price * $quantity;
						$total_amount += $subtotal;
						echo "&#8369;&nbsp;".$subtotal;
					?>
				</td>
				<td>
					<form action="/home/showCart/update{{ $product -> product_id }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="product_id" value="{{ $product -> product_id }}">
						<input type="number" min="1" max="10" name="quantity" value="{{ $product -> quantity }}">
						
						<button class="btn btn-success" type="submit"> Update Quantity </button>
					</form>
				</td>
				<td>
					<form action="/home/showCart/delete" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="product_id" value="{{ $product -> product_id }}">

						<button class="btn btn-danger" type="submit"> Remove to Cart </button>
					</form>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	<div style="text-align: right;">
		<h5 style="color: green;"> Hi {{ Auth::user()->name }} the total amount you've added to you cart is </h5>
		<h4>&#8369;&nbsp;  {{ $total_amount }} </h4>
	</div>
	<button class="btn-success" style="width: 150px; height: 50px;">Paypal</button>
</div>	
@endsection