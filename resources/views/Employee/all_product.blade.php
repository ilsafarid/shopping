@extends('Employee.sidebar')
@section('content')    


<div style="overflow: hidden;">
    <h1 class="text-center display-4">All Product</h1>
    <div class="table-responsive">
        <table class="table ">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Tracking id</th>
                    <th scope="col">Product code</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach($product as $b)
             
                <tr class="">
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->Product_Name }}</td>
                    <td>{{ $b->Product_price }}</td>
                    <td>{{ $b->Product_description }}</td>
                    <td><img src="{{url('productimages', $b->Product_image )}}" alt=""></td>
                    <td>{{ $b->Tracking_id }} </td>
                    <td>{{ $b->product_code }} </td>
                    <td>
                    <a onclick="return confirm('Are You Sure?')" href="{{url('/delete_product', $b->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    
                    </td>
                </tr>
                
               @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection