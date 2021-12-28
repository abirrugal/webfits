@extends('backend.layouts.admin_layouts')

@section('title')

<div class="d-flex flex-column card justify-content-center align-items-center">

    <div class="card-body">
      <h5 class="card-title">Product's Stock Status Details.</h5>
    </div>
  </div>
@endsection

@section('main')


<div class="well">
    <h3 class="my-4">Product's List</h3>
    <p>
    <a class="btn btn-success" href="{{route('admin.products.new')}}">Add Product</a>
    </p>
    <div class="table-responsive">

        <table class="table table-bordered table-condensed">
            <thead>
        <tr class="mb-3">
            <th>Total Stock: {{$data['total_products']}}</th>
            <th>Total Sold: {{$data['total_sales']}}</th>
            <th>Total Remaining : {{$data['total_remaining']}}</th>
        </tr>
            </thead>
        </table>

    <table class="table table-bordered table-condensed">
    <thead>
      
    <tr>
    <th class="h5 p-3">Id</th>
    <th class="h5 p-3">Image</th>
    <th class="h5 p-3">Product's Name</th>
    <th class="h5 p-3">Stock Status</th>
    <th class="h5 p-3">Total Stock</th>
    <th class="h5 p-3">Total sold</th>
    <th class="h5 p-3">Remaining Stock</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
    <td class="h6 text-center">{{$product->id}}</td>
    <td class="card-image text-center"><img width="60px" height="70px" src="{{asset($product->image)}}" alt="{{$product->slug}}"></td>
    
    
    <td class="card-title font-weight-bold text-center">{{$product->title}}</td>



    
    <td class="card-text font-weight-bold text-center"> {{ $product->in_stock ===1? 'In Stock' : 'Out Of Stock'}}</td>
    <td class="card-text font-weight-bold text-center"> {{$product->stock_amount}}</td>
    <td class="card-text font-weight-bold text-center"> {{$product->sale_amount}}</td>
    <td class="card-text font-weight-bold text-center"> {{$product->remaining_amount}}</td>
   
    
    
    
    
    </tr>
    @endforeach
    </tbody>
    </table>
    <div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
    {{$products->links()}}
    </div>
    </div>
    </div>

@endsection