<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Cart</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					@if(Session::has('success_message'))
						<div class="alert alert-success">
							<strong>Success</strong> {{Session::get('success_message')}}
						</div>	
					@endif	
					@if(Cart::count() > 0)
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
						@foreach (Cart::content() as $item)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{ ('assets/images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">Euro  {{$item->model->price}}</p></div>
							<div class="quantity">
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
									<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
									<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price">Euro  {{$item->subtotal}}</p></div>
							<div class="delete">
								<a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
									<span>Delete from your cart</span>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</div>
						</li>
						@endforeach
					</ul>
					@else
						<p>No item in cart</p>
					@endif	
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">Euro  {{Cart::total()}}</b></p>
					</div>
					<div class="checkout-info">
						<a class="btn btn-checkout" href="checkout.html">Check out</a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Clear Shopping Cart</a>
					</div>
				</div>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>
<!--main area-->