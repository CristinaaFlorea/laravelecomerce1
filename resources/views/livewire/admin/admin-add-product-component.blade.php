<div>
<div class="container" style="padding:30px 0;"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Add New Product
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Product Name</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Product Slug</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-4">
                                <textarea class="form-control" placeholder="Description" wire:model="description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Price</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Price" class="form-control input-md" wire:model="price" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Quantity</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Product Image</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file" wire:model="image"/>
                                @if($image)
                                    <img scr="{{$image->temporaryUrl()}}" width="120"/>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="category_id">
                                    <option value="">Select category</option> 
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach   
                                </select>                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
</div>
