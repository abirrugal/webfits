
@extends('backend.layouts.admin_layouts')
@section('title')
    Create New Product.
@endsection
@section('main')
<div class="row">
  <div class="col-12">
    <ul class="nav nav-tabs mb-5">  
        <li class="nav-item">
          <a class="nav-link " href="{{route('admin.products')}}">Products List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Edit Product</a>
          </li>     
      </ul>
      @if($errors->any())         
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger mx-3 p-2">{{$error}}</div>
      @endforeach     
      @endif
    <form action="{{route('admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label text-black h6">Product's Title</label>
        <input type="text" name="title" value="{{$product->title}}" class="form-control" id="title" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Enter your product's name/title here..</div>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label text-black h6">Product's Descriptions</label>
       <textarea name="description" name="description" id="description">{{$product->description}}</textarea>
       <div id="emailHelp" class="form-text">Enter your product's descriptions here..</div>

      </div>
      <div class="mb-3">
        <label for="image" class="form-label text-black h6">Product's Image</label>
        <input type="file" name="image"  class="form-control" id="image" aria-describedby="PriceHelp">
        <div id="emailHelp" class="form-text">Upload product's image..</div>

      </div>
      <div class="mb-3">
        <label for="price" class="form-label text-black h6">Product's Price</label>
        <input type="number" name="price" value="{{$product->price}}" class="form-control" id="price" aria-describedby="PriceHelp">
        <div id="emailHelp" class="form-text">Enter your product's Original price..</div>

      </div>

      <div class="mb-3">
        <label for="price" class="form-label text-black h6">Additional Cost</label>
        <input type="number" name="additional" value="{{$product->shipping_cost}}" class="form-control" id="price" aria-describedby="PriceHelp">
        {{--  <div id="emailHelp" class="form-text">Enter your product's Original price..</div>  --}}

      </div>


     <div class="mb-3">
        <label for="sprice" class="form-label text-black h6">Discount( % )</label>
        <input type="number" name="discount" value="{{$product->discount}}" class="form-control" id="sprice" aria-describedby="PriceHelp">
        <div id="emailHelp" class="form-text">Enter discount amount.</div>
      </div>

      <div class="mb-3">
        <label for="sprice" class="form-label text-black h6">Stock amount</label>
        <input type="number" name="stock" value="{{$product->stock_amount}}" class="form-control" id="sprice" aria-describedby="PriceHelp">
        <div id="emailHelp" class="form-text">Enter your product's stock amount.</div>
      </div>


<label for="stock_status" class="form-label text-black h6">Product's Stock Status</label>
<div class="mb-3">
      <select select class="form-select" aria-label="Default select example" name="product_status" id="stock_status">
       <option value="1" {{$product->active=== 1? 'selected' : '' }}>Active</option>
        <option value="0" {{$product->active=== 0? 'selected' : '' }}>Inactive</option>
      </select>
    </div>

<label for="stock_status" class="form-label text-black h6">Product's Stock Status</label>
<div class="mb-3">
      <select select class="form-select" aria-label="Default select example" name="stock_status" id="stock_status">
        <option value="1" {{$product->in_stock===1? 'selected' : ''}}>In Stock</option>
        <option value="0" {{$product->in_stock===0? 'selected' : ''}}>Out Of Stock</option>
      </select>
    </div>


    <label for="stock_status" class="form-label text-black h6">Select Brand</label>

    <div class="mb-3">
      <select  select class="form-select" aria-label="Default select example" name="brand_id">
        <option value="">Select Brand</option>

        @isset($brands)
        
        @foreach ($brands as $brand)
     
       
        <option value="{{$brand->id}}" @isset($product->brand->name){{  $product->brand->name === $brand->name ?  'selected': '' }}
            
        @endisset > {{$brand->name}}</option>
 
   
        @endforeach
        @endisset
    

      </select>
    </div>


    
  <div class="my-2 ">
    <div class="form-label text-black h6 my-2">Selected Color</div>

    @foreach ($product->product_colors as $cinfo)

    <button type="button" class="btn btn-primary mx-1">

    
      {{$cinfo->color_name}} <span class="badge badge-light"><a class="text-white" style="text-decoration: none;" href="{{route('admin.product_color.delete', $cinfo->id)}}">X</a></span>

    
      
    </button>
   
    @endforeach

  </div> 


  <div class="col">
    <div class="mb-3 form-group">
    <label for="slider_image" class="form-label text-black h6">Select Color</label>
    <select class="form-select custom-select js-example-basic-multiple form-control" multiple="multiple" name="room_ids[]" id="room_ids" aria-label="Default select example" placeholder="Select from avilable free room">
      @foreach ($product_colors as $product_color)
          
      
      <option value="{{$product_color->id}}" >{{$product_color->name}}</option>
      
      @endforeach
    </select>
  </div>  
  </div>  







  <div class="my-2 ">
    <div class="form-label text-black h6 my-2">Selected Sizes</div>

    @foreach ($product->product_sizes as $cinfo)

    <button type="button" class="btn btn-primary mx-1">

    
      {{$cinfo->size}} <span class="badge badge-light"><a class="text-white" style="text-decoration: none;" href="{{route('admin.pro_size.delete', $cinfo->id)}}">X</a></span>

    
      
    </button>
   
    @endforeach

  </div> 


  <div class="col">
    <div class="mb-3 form-group">
    <label for="slider_image" class="form-label text-black h6">Select Size</label>
    <select class="form-select custom-select js-example-basic-multiple1 form-control" multiple="multiple" name="size_ids[]" id="size_ids" aria-label="Default select example" placeholder="Select from avilable free room">
      @foreach ($product_sizes as $product_size)
          
      
      <option value="{{$product_size->id}}" >{{$product_size->size}}</option>
      
      @endforeach
    </select>
  </div>  
  </div>  




  <div class="my-2 ">
    <div class="form-label text-black h6 my-2">Selected Weight</div>

    @foreach ($product->product_weights as $product_weight)

    <button type="button" class="btn btn-primary mx-1">

    
      {{$product_weight->weight}} <span class="badge badge-light"><a class="text-white" style="text-decoration: none;" href="{{route('admin.pro_weight.delete', $product_weight->id)}}">X</a></span>

    
      
    </button>
   
    @endforeach

  </div> 


  <div class="col">
    <div class="mb-3 form-group">
    <label for="slider_image" class="form-label text-black h6">Select Weights</label>
    <select class="form-select custom-select js-example-basic-multiple3  form-control" multiple="multiple" name="weight_ids[]" id="weight_ids" aria-label="Default select example" placeholder="Select from avilable free room">
      @foreach ($product_weights as $product_weight)
          
      
      <option value="{{$product_weight->id}}" >{{$product_weight->weight}}-{{$product_weight->price}}</option>
      
      @endforeach
    </select>
  </div>  
  </div> 





<label for="stock_status" class="form-label text-black h6">Select Category</label>
<div class="mb-3">
      <select id="categoryList" class="form-select" aria-label="Default select example" name="category">
        {{-- <option>Select a Category</option> --}}
        @foreach ($categories as $category)
        <option value="{{$category->id}}" {{$category->id === $product->category_id? 'selected':''}}>{{$category->name}}</option>
        @endforeach
      </select>
    </div>

<label for="stock_status" class="form-label text-black h6">Select Sub-Category</label>
<div class="mb-2">
      <select id="subcategoryList" select class="form-select" aria-label="Default select example" name="sub_category">
       {{-- <option selected  value="">Select a Sub-Category</option> --}}

        @foreach ($categories as $category)
        @if($category->child_category)
        @foreach ($category->child_category as $child)       
        <option value="{{$child->id}}" {{$child->id === $product->category_id? 'selected':''}}  class='parent-{{ $child->category_id }} subcategory'>{{$child->name}}</option>
        @endforeach
        @endif
        @endforeach
      </select>
    </div>

    <div id="emailHelp" class="form-text">Select a sub-category. this is Optional</div>


    {{--  <label for="stock_status" class="form-label text-black h6">Select Child-Category</label>
    <div class="mb-3">
          <select id="childcategoryList" select class="form-select" aria-label="Default select example" name="child_category">        
            @foreach ($categories as $category)
            @if($category->child_category)
            @foreach ($category->child_category as $sub)
            @if($sub->child->count()>0)   
            @foreach($sub->child as $child)
            <option value="{{$child->id}}" {{$child->id === $product->category_id? 'selected':''}} class='parent-{{ $child->subcategory_id }} childcategory'>{{$child->name}}</option> 
            @endforeach
            @endif
            @endforeach
            @endif
            @endforeach
          </select>
        </div>
    <div id="emailHelp" class="form-text">Select a child-category. this is Optional</div>  --}}




    <label for="stock_status" class="form-label text-black h6">Select a option (Optional).</label>


    <div class="border p-3 ">
        <div class="custom-control custom-checkbox h6 ">
    
          <input type="checkbox" name="premium" value="premium" class="custom-control-input" id="premium" {{$product->premium === 'premium' ? 'checked':''}}>
          <label class="custom-control-label" for="premium">This Product Is A Gift Item.</label>
        </div>



    
{{--      
        
        <div class="custom-control custom-checkbox h6">
    
          <input type="checkbox" name="comfort" value="comfort" class="custom-control-input" id="comfort" {{$product->comfort === 'comfort' ? 'checked':''}}>
          <label class="custom-control-label" for="comfort">Ustomize Comfort.</label>
        </div>
    
    
        <div class="custom-control custom-checkbox h6">
    
          <input type="checkbox" name="decor_dining" value="decor_dining" class="custom-control-input" id="decor_dining" {{$product->decor_dining === 'decor_dining' ? 'checked':''}}>
          <label class="custom-control-label" for="decor_dining">Decor Your Dining Room.</label>
        </div>
    
    
        <div class="custom-control custom-checkbox h6">
    
          <input type="checkbox" name="bedroom" value="bedroom" class="custom-control-input" id="bedroom" {{$product->bedroom === 'bedroom' ? 'checked':''}}>
          <label class="custom-control-label" for="bedroom">Bedroom.</label>
        </div>
    
    
        <div class="custom-control custom-checkbox h6">
    
          <input type="checkbox" name="comfy_bedding" value="comfy_bedding" class="custom-control-input" id="comfy_bedding" {{$product->comfy_bedding === 'comfy_bedding' ? 'checked':''}}>
          <label class="custom-control-label" for="comfy_bedding">Comfy Bedding.</label>
        </div>  --}}
    
    </div>








      <button type="submit" class="btn btn-primary mt-3 w-100">Edit</button>
    </form>
  <script>
          
    CKEDITOR.replace( 'description' );
</script>
  </div>
</div>
@endsection
@section('before_body')
<script>
$('#categoryList').on('change', function () {
    $("#subcategoryList").attr('disabled', false); //enable subcategory select
    $("#subcategoryList").val("");
    $("#childcategoryList").attr('disabled', false); //enable subcategory select
    $("#childcategoryList").val("");
    $(".subcategory").attr('disabled', true); //disable all category option
    $(".subcategory").hide(); //hide all subcategory option
    $(".parent-" + $(this).val()).attr('disabled', false); //enable subcategory of selected category/parent
    $(".parent-" + $(this).val()).show(); 
});

$('#subcategoryList').on('change', function () {
    $("#childcategoryList").attr('disabled', false); //enable subcategory select
    $("#childcategoryList").val("");
    $(".childcategory").attr('disabled', true); //disable all category option
    $(".childcategory").hide(); //hide all subcategory option
    $(".parent-" + $(this).val()).attr('disabled', false); //enable subcategory of selected category/parent
    $(".parent-" + $(this).val()).show(); 
});

$(document).ready(function() {
    $('.js-example-basic-multiple1').select2({
      

    });

    $('.js-example-basic-multiple').select2({
      

    });
    $('.js-example-basic-multiple3').select2({
      

    });

});

</script>  





@endsection




