<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Product Categories</span></li>
            <li class="item-link"><span>{{$category_name}}</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">


            <div class="wrap-shop-control">

                <h1 class="shop-title">{{$category_name}}</h1>

                <div class="wrap-right">


                </div>

            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">
                    @foreach ($products as $products)

                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug'=>$products->slug])}}" title="{{$products->name}}">
                                    <figure><img src="{{ asset('assets/images/products')}}/{{$products->image}}" alt="{{$products->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details',['slug'=>$products->slug])}}" class="product-name"><span>{{$products->name}}</span></a>
                                <div class="wrap-price"><span class="products-price">Euro  {{$products->price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$products->id}},'{{$products->name}}',{{$products->price}})">Add To Cart</a>
                            </div>
                        </div> 
                    </li>
                    @endforeach
               
                </ul>
            </div>

            <div class="wrap-pagination-info">
            
            </div>
        </div><!--end main products area-->

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">All Categories</h2>
                <div class="widget-content">
                    <ul class="list-category">
                    @foreach($categories as $category)
                        <li class="category-item">
                            <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- Categories widget-->

        </div><!--end sitebar-->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->
