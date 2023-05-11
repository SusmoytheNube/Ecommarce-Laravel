@extends("Backend.master")

@section('main-content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTable -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Manage Products</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#P_id</th>
              <th>Product Name</th>
              <th>Product Description</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#P_id</th>
              <th>Product Name</th>
              <th>Product Description</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @php
            $i=1;
            @endphp
            @if(count($products)>0)

            @foreach($products as $productItem)
            <tr>
              <td>{{$i++;}}</td>
              <td>{{$productItem->p_name}}</td>
              <td>{{$productItem->p_des}}</td>
              <td>{{$productItem->p_qty}}</td>
              <td>{{$productItem->p_price}}</td>

              <td>
                @if($productItem->p_status == 1)
                  <a href="{{Route('activeProduct', $productItem->id)}}" 
                  class="btn btn-success">Active</a>
                @else
                  <a href="{{Route('inactiveProduct', $productItem->id)}}" class="btn btn-danger">Inactive</a>
                @endif
              </td>
              <td>
                <a href="{{Route('editProduct', $productItem->id)}}" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteModal" >
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
            <!-- Delete Model -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Do you want to delete this item?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-danger" href="{{Route('deleteProduct', $productItem->id)}}">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @else

            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection