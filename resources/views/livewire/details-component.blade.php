<!--main area-->
<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Home</a></li>
            <li class="item-link"><span>Details</span></li>
        </ul>
    </div>


        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="wrap-product-detail">
                <div class="detail-media">
                

                        <li data-thumb="{{ asset('assets/images/products')}}/{{$product->image}}">
                            <img src="{{asset('assets/images/products')}}/{{$product->image}}"  />
                        </li>

                </div>
                <div class="detail-info">
                    
                    <h2 class="product-name">{{$product->name}}</h2>
                    <div class="short-desc">
                        {{$product->description}}
                    </div>
                    
                    <div class="wrap-price"><span class="product-price">Euro  {{$product->price}}</span></div>
                    
                    <div class="quantity">
                        <span>Quantity:</span>
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
                            
                            <a class="btn btn-reduce" href="#"></a>
                            <a class="btn btn-increase" href="#"></a>
                        </div>
                    </div>
                    <div class="wrap-butons">
                        <a href="#" class="btn add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div><!--end main products area-->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->