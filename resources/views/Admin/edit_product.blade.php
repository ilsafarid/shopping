@extends('Admin.sidebar')
@section('content')

<div class="container w-50">
    <h1 class="text-center display-4">Edit Product</h1>
    
    <form action="{{url('/update_product', $product->id)}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="my-3">
     <input  value="{{$product->Product_Name}}" type="text" placeholder="Product Name" name="name" class="form-control border border-primary">
        </div>

        <div class="my-3">
     <input value="{{$product->Product_price}}" type="text" placeholder="Product Price" name="price" class="form-control border border-primary">
        </div>

        <div class="my-3">
     <input type="text" value="{{$product->Product_description}}"  placeholder="Product Description" name="desc" class="form-control border border-primary">
        </div>

        <div class="my-3">
     <input type="file" name="image" class="form-control border border-primary">
     <img src="{{url('productimages', $product->Product_image)}}" width="100px" height="150px"alt="">
        </div>

        
     <div class="my-3">
    <button class="btn btn-primary"> Edit Product</button>
     </div>

    </form>

</div>

@endsection