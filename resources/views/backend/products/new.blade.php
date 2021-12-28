
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
            <a class="nav-link active" href="#">Add Product</a>
          </li>
      </ul>
      @if($errors->any())        
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger mx-3 p-2">{{$error}}</div>
      @endforeach   
      @endif  
    <form action="{{route('admin.products')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
      <div class="mb-3">
        <label for="title" class="form-label text-black h6">Product's Title</label>
        <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Enter your product's name/title here..</div>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label text-black h6">Product's Descriptions</label>
       <textarea name="description" name="description" id="summary-ckeditor">{{old('description')}}</textarea>
       <div id="emailHelp" class="form-text">Enter your product's descriptions here..</div>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label text-black h6">Product's Image</label>
        <input type="file" name="image"  class="form-control" id="image" aria-describedby="PriceHelp">
        <div id="emailHelp" class="form-text">Upload product's image..</div>
      </div>



      {{-- Add Color And Image to the product  --}}

      {{-- Color image 1  --}}

      <h3>Color And Image 1</h3>


    <div class="mb-3">
        <label for="title" class="form-label text-black h6">Product's Color Name</label>
        <input type="text" name="c_name1" value="{{old('c_name1')}}" class="form-control" aria-describedby="emailHelp">
        {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
      </div>

    <div class="mb-3">
        <label for="title" class="form-label text-black h6">Select Color</label>
        <input type="color" name="color1" value="{{old('color1')}}" class="form-control"  aria-describedby="emailHelp">
        {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
      </div>


      <div class="mb-3">
        <label for="image" class="form-label text-black h6">Upload Color Releted Product's Image</label>
        <input type="file" name="color_image1"  class="form-control"  aria-describedby="PriceHelp">
        {{-- <div id="emailHelp" class="form-text">Upload product's image..</div> --}}
      </div>


<h3>Color And Image 2</h3>


{{-- Color image 2  --}}

      <div class="mb-3">
        <label for="title" class="form-label text-black h6">Product's Color Name</label>
        <input type="text" name="c_name2" value="{{old('c_name2')}}" class="form-control" aria-describedby="emailHelp">
        {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
      </div>

    <div class="mb-3">
        <label for="title" class="form-label text-black h6">Select Color</label>
        <input type="color" name="color2" value="{{old('color2')}}" class="form-control"  aria-describedby="emailHelp">
        {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
      </div>


      <div class="mb-3">
        <label for="image" class="form-label text-black h6">Upload Color Releted Product's Image</label>
        <input type="file" name="color_image2"  class="form-control"  aria-describedby="PriceHelp">
        {{-- <div id="emailHelp" class="form-text">Upload product's image..</div> --}}
      </div>



      <h3>Color And Image 3</h3>


{{-- Color image 3  --}}

      <div class="mb-3">
        <label for="title" class="form-label text-black h6">Product's Color Name</label>
        <input type="text" name="c_name3" value="{{old('c_name3')}}" class="form-control" aria-describedby="emailHelp">
        {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
      </div>

    <div class="mb-3">
        <label for="title" class="form-label text-black h6">Select Color</label>
        <input type="color" name="color3" value="{{old('color3')}}" class="form-control"  aria-describedby="emailHelp">
        {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
      </div>


      <div class="mb-3">
        <label for="image" class="form-label text-black h6">Upload Color Releted Product's Image</label>
        <input type="file" name="color_image3"  class="form-control"  aria-describedby="PriceHelp">
        {{-- <div id="emailHelp" class="form-text">Upload product's image..</div> --}}
      </div>



      <h3>Color And Image 4</h3>


      {{-- Color image 4  --}}
      
            <div class="mb-3">
              <label for="title" class="form-label text-black h6">Product's Color Name</label>
              <input type="text" name="c_name4" value="{{old('c_name4')}}" class="form-control" aria-describedby="emailHelp">
              {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
            </div>
      
          <div class="mb-3">
              <label for="title" class="form-label text-black h6">Select Color</label>
              <input type="color" name="color4" value="{{old('color4')}}" class="form-control"  aria-describedby="emailHelp">
              {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
            </div>
      
      
            <div class="mb-3">
              <label for="image" class="form-label text-black h6">Upload Color Releted Product's Image</label>
              <input type="file" name="color_image4"  class="form-control"  aria-describedby="PriceHelp">
              {{-- <div id="emailHelp" class="form-text">Upload product's image..</div> --}}
            </div>




            <h3>Color And Image 5</h3>


            {{-- Color image 5  --}}
            
                  <div class="mb-3">
                    <label for="title" class="form-label text-black h6">Product's Color Name</label>
                    <input type="text" name="c_name5" value="{{old('c_name5')}}" class="form-control" aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
                  </div>
            
                <div class="mb-3">
                    <label for="title" class="form-label text-black h6">Select Color</label>
                    <input type="color" name="color5" value="{{old('color5')}}" class="form-control"  aria-describedby="emailHelp">
                    {{-- <div id="emailHelp" class="form-text">Enter your product's name/title here..</div> --}}
                  </div>
            
            
                  <div class="mb-3">
                    <label for="image" class="form-label text-black h6">Upload Color Releted Product's Image</label>
                    <input type="file" name="color_image5"  class="form-control"  aria-describedby="PriceHelp">
                    {{-- <div id="emailHelp" class="form-text">Upload product's image..</div> --}}
                  </div>
      
      




      <div class="mb-3">
        <label for="price" class="form-label text-black h6">Product's Price</label>
        <input type="number" name="price" value="{{old('price')}}" class="form-control" id="price">
        <div id="emailHelp" class="form-text">Enter your product's Original price..</div>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label text-black h6">Additional Cost</label>
        <input type="number" name="additional" value="{{old('additional')}}" class="form-control" id="price">
        {{--  <div id="emailHelp" class="form-text">Enter your product's Original price..</div>  --}}
      </div>

      <div class="mb-3">
        <label for="sprice" class="form-label text-black h6">Discount( % )</label>
        <input type="number" name="discount" value="{{old('discount')}}" class="form-control" id="sprice" aria-describedby="PriceHelp">
        <div id="emailHelp" class="form-text">Enter discount amount.</div>
      </div>

      <div class="mb-3">
        <label for="sprice" class="form-label text-black h6">Stock amount</label>
        <input type="number" name="stock" value="{{old('stock')}}" class="form-control" id="sprice" aria-describedby="PriceHelp">
        <div id="emailHelp" class="form-text">Enter your product's stock amount.</div>
      </div>
<label for="stock_status" class="form-label text-black h6">Product's Stock Status</label>
<div class="mb-3">
      <select select class="form-select" aria-label="Default select example" name="product_status" id="stock_status">
        <option value="1" {{old('product_status')=== 1? 'selected' : '' }}>Active</option>
        <option value="0" {{old('product_status')=== 0? 'selected' : '' }}>Inactive</option>
      </select>
    </div>
<label for="stock_status" class="form-label text-black h6">Product's Stock Status</label>
<div class="mb-3">
      <select select class="form-select" aria-label="Default select example" name="stock_status" id="stock_status">
        <option value="1">In Stock</option>
        <option value="0">Out Of Stock</option>
      </select>
    </div>


    <div class="mb-3">
      <select  select class="form-select" aria-label="Default select example" name="brand_id">
        <option value="">Select Brand</option>
        @foreach ($brands as $brand)
     
       
        <option value="{{$brand->id}}" >{{$brand->name}}</option>
 
   
        @endforeach
      </select>
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


    <div class="col">
      <div class="mb-3 form-group">
      <label for="slider_image" class="form-label text-black h6">Select Sizes</label>
      <select class="form-select custom-select js-example-basic-multiple2  form-control" multiple="multiple" name="size_ids[]" id="size_ids" aria-label="Default select example" placeholder="Select from avilable free room">
        @foreach ($product_sizes as $product_size)
            
        
        <option value="{{$product_size->id}}" >{{$product_size->size}}</option>
        
        @endforeach
      </select>
    </div>  
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
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>


<label for="stock_status" class="form-label text-black h6">Select Sub-Category</label>
<div class="mb-3">
      <select id="subcategoryList" select class="form-select" aria-label="Default select example" name="sub_category">
        <option value="">Select Sub-Category</option>
        @foreach ($categories as $category)
        @if($category->child_category->count()>0)
        @foreach ($category->child_category as $sub)          
        <option value="{{$sub->id}}" class='parent-{{ $sub->category_id }} subcategory'>{{$sub->name}}</option>
      @endforeach
        @endif
        @endforeach
      </select>
    </div>


     <label for="stock_status" class="form-label text-black h6">Select Child-Category</label>
    <div class="mb-3">
          <select id="childcategoryList" select class="form-select" aria-label="Default select example" name="child_category">
           <option value="">Select Child-Category</option>
            @foreach ($categories as $category)
            @if($category->child_category)
            @foreach ($category->child_category as $sub)
            @if($sub->child->count()>0)   
            @foreach($sub->child as $child)
            <option value="{{$child->id}}" class='parent-{{ $child->subcategory_id }} childcategory'>{{$child->name}}</option> 
            @endforeach
            @endif
            @endforeach
            @endif
            @endforeach
          </select>
        </div>
    <div id="emailHelp" class="form-text mb-3">Select a child-category. this is Optional</div> 


    <label for="stock_status" class="form-label text-black h6">Select a option (Optional).</label>


<div class="border p-3 ">
    {{-- <div class="custom-control custom-checkbox h6 ">

      <input type="checkbox" name="premium" value="premium" class="custom-control-input" id="premium">
      <label class="custom-control-label" for="premium">This Product Is A Gift Item.</label>
    </div> --}}


    
    {{--  <div class="custom-control custom-checkbox h6">

      <input type="checkbox" name="comfort" value="comfort" class="custom-control-input" id="comfort">
      <label class="custom-control-label" for="comfort">Ustomize Comfort.</label>
    </div>


    <div class="custom-control custom-checkbox h6">

      <input type="checkbox" name="decor_dining" value="decor_dining" class="custom-control-input" id="decor_dining">
      <label class="custom-control-label" for="decor_dining">Decor Your Dining Room.</label>
    </div>


    <div class="custom-control custom-checkbox h6">

      <input type="checkbox" name="bedroom" value="bedroom" class="custom-control-input" id="bedroom">
      <label class="custom-control-label" for="bedroom">Bedroom.</label>
    </div>


    <div class="custom-control custom-checkbox h6">

      <input type="checkbox" name="comfy_bedding" value="comfy_bedding" class="custom-control-input" id="comfy_bedding">
      <label class="custom-control-label" for="comfy_bedding">Comfy Bedding.</label>
    </div>  --}}

</div>

      


   






      <button type="submit" class="btn btn-primary mt-3 w-100">Submit</button>
    </form>
    <script>
      CKEDITOR.replace( 'summary-ckeditor' );
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
    $('.js-example-basic-multiple').select2({
      

    });

    $('.js-example-basic-multiple2').select2({
      

    });
    $('.js-example-basic-multiple3').select2({
      

    });

});


</script>  
@endsection