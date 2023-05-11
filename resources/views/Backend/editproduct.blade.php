@extends("Backend.master")

@section('main-content')
<!-- Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{Route('updateProduct',$products->id)}}" method="POST" class="shadow p-5">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 

                <div class="form-group mb-3">
                  <label for="pro_name" class="form-label">Product Name</label>
                  <input type="text" name="pro_name" id="pro_name" class="form-control" value="{{$products->p_name}}" placeholder="Enter Product Name">                          
                </div>
                <div class="form-group mb-3">
                  <label for="pro_des" class="form-label">Product Description</label>
                  <textarea type="text" name="pro_des" id="pro_des" cols="30" rows="2" class="form-control" value="{{$products->p_des}}" placeholder="Enter Product Description"></textarea>              
                </div>
                <div class="form-group mb-3">
                  <label for="pro_qty" class="form-label">Product Quantity</label>
                  <input type="number" name="pro_qty" id="pro_qty" class="form-control" value="{{$products->p_qty}}" placeholder="Enter Product Quantity">
                </div>
                <div class="form-group mb-3">
                  <label for="pro_price" class="form-label">Product Price</label>
                  <input type="number" name="pro_price" id="pro_price" class="form-control" value="{{$products->p_price}}" placeholder="Enter Product Price">         
                </div>
                <div class="form-group mb-3">
                    <label for="pro_status" class="form-label">Product Status :</label>
                    <select name="pro_status" id="pro_status">
                        <option value="">------select status------</option>
                        <option value="1" @if($products->pro_status == 1) selected 
                            @endif>Active</option>
                        <option value="0" @if($products->pro_status == 0) selected 
                            @endif>Inactive</option>
                    </select>
                </div>
                 
                <div class="form-group mb-3">
                    <button class="btn btn-outline-success">Update Product</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->
@endsection