@extends('Admin.sidebar')
@section('content')






<div class="container w-50">
    <h1 class="text-center display-4">Add Product</h1>
    
    <form action="{{url('/inserted')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="my-3">
     <input type="text" placeholder="Product Name" name="name" class="form-control border border-primary">
        </div>

        <div class="my-3">
     <input type="text" placeholder="Product Price" name="price" class="form-control border border-primary">
        </div>

        <div class="my-3">
     <input type="text" placeholder="Product Description" name="desc" class="form-control border border-primary">
        </div>

        <div class="my-3">
     <input type="file" name="Product_image" class="form-control border border-primary">
        </div>

      
     <div class="my-3">
    <button class="btn btn-primary"> Add Product</button>
     </div>

    </form>

</div>

@endsection