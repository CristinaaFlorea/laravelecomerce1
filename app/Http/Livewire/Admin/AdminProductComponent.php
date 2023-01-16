<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $product = Product::paginate(20);
        return view('livewire.admin.admin-product-component',['products'=>$product])->layout('layouts.base');
    }
}
