<div>
    <style>
        nav svg{
            height: 50px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;"></div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                All products
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th> 
                            <th>Name</th> 
                            <th>Price</th> 
                            <th>Category</th> 
                            <th>Date</th>   
                            <th>Change</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->created_at}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
            </div>
        </div>
    </div>    
</div>
