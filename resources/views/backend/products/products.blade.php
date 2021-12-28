
@extends('backend.layouts.admin_layouts')
@section('title')
    Products List.
@endsection
@section('main')
<ul class="nav nav-tabs my-4">
  <li class="nav-item">
    <a class="nav-link active" href="#">Products List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{route('admin.products.new')}}">Add Product</a>
  </li>
</ul>



<div class="well">
<h3 class="my-4">Product's List</h3>
<p>
<a class="btn btn-success" href="{{route('admin.products.new')}}">Add Product</a>
</p>
<div class="table-responsive">
<table class="table table-bordered table-condensed">
<thead>
<tr>
<th class="h5 p-3">Id</th>
<th class="h5 p-3">Image</th>
<th class="h5 p-3">Product's Name</th>
<th class="h5 p-3">Brand</th>
<th class="h5 p-3">Colors</th>
<th class="h5 p-3">Sizes</th>
<th class="h5 p-3">Weights</th>
<th class="h5 p-3">Stock Status</th>
<th class="h5 p-3">Price</th>
<th class="h5 p-3">Additional Cost</th>
<th class="h6 p-3">Discounted Price<div class="text-muted btn-sm">Price after discount</div></th>
<th class="h5 p-3">Category</th>
<th class="h5 p-3">Action</th>
</tr>
</thead>
<tbody>
@foreach($allproducts as $product)



<tr>
<td class="h6 text-center">{{$product->id}}</td>
<td class="card-image text-center"><img width="60px" height="70px" src="{{asset($product->image)}}" alt="{{$product->slug}}"></td>


<td class="card-title font-weight-bold text-center">{{$product->title}}</td>
<td class="card-title font-weight-bold text-center">
@isset($product->brand)

{{$product->brand->name}}

@endisset
</td>

<td class="card-title font-weight-bold text-center">
@isset($product->product_colors)

@foreach ($product->product_colors as $color)

  <div> {{$color->color_name}} </div>

@endforeach

@endisset
</td>

<td class="card-title font-weight-bold text-center">
  @isset($product->product_sizes)
  
  @foreach ($product->product_sizes as $size)
  
    <div>{{$size->size}}</div>
  
  @endforeach
  
  @endisset
  </td>


<td class="card-title font-weight-bold text-center">
  @isset($product->product_weights)
  
  @foreach ($product->product_weights as $weight)
  
    <div>{{$weight->weight}}</div>
  
  @endforeach
  
  @endisset
  </td>


<td class="card-text font-weight-bold text-center"> <div>{{ $product->in_stock ===1? 'In Stock' : 'Out Of Stock'}}</div>
  <div>Amount: {{number_format($product->stock_amount)}} </div>

</td>

<td class="card-text font-weight-bold text-center">{{$product->price}}

</td>
<td class="card-text font-weight-bold text-center">{{$product->shipping_cost}}</td>

@php
  $discounted =  $product->price - $product->discount;
@endphp

{{-- <td class="card-text font-weight-bold">{{$product->sale_price === null? 'No Discount' : number_format($product->sale_price, 2) }}</td> --}}
<td class="card-text font-weight-bold text-center">{{$product->discount === null? 'No Discount' : number_format($discounted)  }} ({{$product->discount}}%) </td>
<td class="card-text font-weight-bold text-center">

@isset($product->category->name)
  {{$product->category->name}}
@endisset


</td>
<td class="d-flex justify-content-center align-items-center">
    <a  href="{{route('admin.products.show', $product->id)}}" class="mt-2 btn btn-info text-white me-3">Details</a>
    <a  href="{{route('admin.products.edit', $product->id)}}" class="mt-2 btn btn-warning me-3">Edit</a>
  <form class="d-inline " onclick="return confirm('Sure to delete product ?')"  action="{{route('admin.products.delete', $product->id)}}" method="POST">
  @csrf
  @method('Delete')
  <button type="submit" class="btn btn-danger mt-2">Delete</button>
  </form>
</td>
</tr>
@endforeach
</tbody>
</table>
<div class="d-flex justify-content-center align-items-center mb-4 bg-secondary pt-3">
{{$allproducts->links()}}
</div>
</div>
</div>


@endsection