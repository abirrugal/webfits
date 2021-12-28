@php
use Illuminate\Http\Request;
@endphp
<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-success">
<div class="position-sticky  ex4">
<div class="list-group list-group-flush mx-3 mt-4">


 <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}"  aria-current="true">
   <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
 </a>


 @if(auth()->user()->role_as !== 'creator')
 <a href="{{route('admin.orders')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'orders') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
@endif

 @if(auth()->user()->role_as !== 'cashier')
 <a href="{{route('admin.brand')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'brand') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Brand</span></a>

 <a href="{{route('admin.favicon')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'favicon') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Favicon</span></a>

 <a href="{{route('admin.logo')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'logo') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Logo</span></a>

 <a href="{{route('coupon')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(1) == 'coupon') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Coupon</span></a>

 <a href="{{route('admin.color')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'color') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Color</span></a>

 <a href="{{route('admin.size')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'size') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Size</span></a>
   
 <a href="{{route('admin.weight')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'weight') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Weight</span></a>

 <a href="{{route('admin.social')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'social') ? 'active' : '' }}"><i
   class="fas fa-chart-bar fa-fw me-3"></i><span>Social</span></a>





   
 <li class="nav-item dropdown list-unstyled">
   <a href="" class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center text-white {{ (request()->segment(1) == 'categories'||'subcategories') ? 'active' : '' }}"
     id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
     <i class="fas fa-chart-pie fa-fw me-3"></i><span class="me-3">Categories</span> <i class="fas fa-chevron-down ms-auto"></i>

   </a>
   <ul class="dropdown-menu dropdown-menu-end w-100" aria-labelledby="navbarDropdownMenuLink">
     <li class="border-top p-3"><a class="dropdown-item {{ (request()->segment(2) == 'categories') ? 'active' : '' }}" href="{{route("admin.categories")}}">Categories</a></li>
     <li class="border-top p-3"><a class="dropdown-item {{ (request()->segment(2) =='subcategories') ? 'active' : '' }}" href="{{route("admin.subcategories")}}">Sub-Categories</a></li>
     <li class="border-top p-3"><a class="dropdown-item {{ (request()->segment(2) =='childcategories') ? 'active' : '' }}" href="{{route("admin.childcategories")}}">Child-Categories</a></li>
     <li class="border-top p-3"><a class="dropdown-item {{ (request()->segment(2) =='offer') ? 'active' : '' }}" href="{{route("admin.offer")}}">Offer-Categories</a></li>
   </ul>
 </li>


 <li class="nav-item dropdown list-unstyled">
  <a href="" class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center text-white {{ (request()->segment(1) == 'categories'||'subcategories') ? 'active' : '' }}"
    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-chart-pie fa-fw me-3"></i><span class="me-3">Pages</span> <i class="fas fa-chevron-down ms-auto"></i>

  </a>
  <ul class="dropdown-menu dropdown-menu-end w-100" aria-labelledby="navbarDropdownMenuLink">
    <li class="border-top p-3"><a class="dropdown-item {{ (request()->segment(2) == 'page_title') ? 'active' : '' }}" href="{{route("admin.page_title")}}">Page Title</a></li>
    <li class="border-top p-3"><a class="dropdown-item {{ (request()->segment(2) =='page_content') ? 'active' : '' }}" href="{{route("admin.page_content")}}">Page Content</a></li>
  </ul>
</li>




     <a href="{{route("admin.products")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'products') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Products
     </a> 

     <a href="{{route("admin.products.stlist")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(3) == 'stock_list') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Stock Status
     </a>  

     {{-- <a href="{{route("admin.title_category")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'title_category') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Title Category
     </a>   --}}



     <a href="{{route("admin.area")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'area') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Area
     </a>  

     <a href="{{route("admin.blog")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'blog') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Blog
     </a>  




     <a href="{{route("admin.slider")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'slider') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Main Slider
     </a> 


     {{--  <a href="{{route("admin.about")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'about') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>About us
     </a>  --}}
     
     <a href="{{route("admin.contact")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'contact') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Contact us
     </a> 

     {{-- <a href="{{route("admin.explore")}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'explore') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Explore Furniture
     </a>  --}}
 
      

     @if (Illuminate\Support\Facades\Auth::check() &&
     auth()->user()->role_as === 'superadmin')          <a href="{{route('admin.account')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'register') ? 'active' : '' }}">
       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill me-3" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
       </svg>Create User
     </a>  
@endif







 <a href="{{route('admin.customers')}}" class="list-group-item list-group-item-action py-2 ripple {{ (request()->segment(2) == 'customers') ? 'active' : '' }}">        
   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill me-3" viewBox="0 0 16 16">
     <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
     <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
     <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
   </svg>
   <span>Customers</span></a>


@endif

</div>
</div>
</nav>

<!-- Sidebar -->

<!-- Navbar -->
<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
<!-- Container wrapper -->
<div class="container-fluid">
<!-- Toggle button -->
<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
 aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
 <i class="fas fa-bars"></i>
</button>
<!-- Brand -->
<a class="navbar-brand" href="#">
<div class="h5">{{auth()->user()->name}}</div>
</a>
<!-- Search form -->
<form class="d-none d-md-flex input-group w-auto my-auto">
 <input autocomplete="off" type="search" class="form-control rounded"
   placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
 <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
</form>
<!-- Right links -->
<ul class="navbar-nav ms-auto d-flex flex-row">
 

 <!-- Notification dropdown -->

 {{-- <li class="nav-item dropdown">
   <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
     role="button" data-mdb-toggle="dropdown" aria-expanded="false">
     <i class="fas fa-bell"></i>
     <span class="badge rounded-pill badge-notification bg-danger">1</span>
   </a>
   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
     <li><a class="dropdown-item" href="#">Some news</a></li>
     <li><a class="dropdown-item" href="#">Another news</a></li>
     <li>
       <a class="dropdown-item" href="#">Something else</a>
     </li>
   </ul>
 </li> --}}

 <!-- Icon -->

 {{-- <li class="nav-item me-3 me-lg-0">
   <a class="nav-link" href="#">
     <i class="fab fa-github"></i>
   </a>
 </li> --}}

 <!-- Avatar -->

 <li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
     id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">

     {{-- <img src="{{asset($logos[0]->image)}}" class="rounded-circle" height="22"
       alt="" loading="lazy" /> --}}

       <i class="far fa-user h5"></i>
   </a>
   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
     <li><a class="dropdown-item" href="{{route('frontend.user.profile', auth()->user()->id)}}">My profile</a></li>
     <li><a class="dropdown-item" href="#">Settings</a></li>
     <li>
       <form class="dropdown-item" action="{{route('logout')}}" method="get">
         @csrf
       <button type="submit" class="btn btn-secondary mt-2 w-100">Logout</button> 
       </form>
   </li>
   </ul>
 </li>

 <li class="nav-item ms-4">
  <a href="{{route('frontend.product.index')}}"><button class="btn btn-secondary">Clint View</button></a>
</li>

</ul>
</div>
<!-- Container wrapper -->
</nav>


<style>

.list-group-item{
  background-color:#198754;
  color: white;
}

div.ex4 {

width: 250px;
height: 90vh;
overflow: scroll;
}
.navbar-light .navbar-brand , .navbar-light .navbar-toggler, .navbar-light .navbar-nav .nav-link{
  color: white;
}


.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
  color: #fff;
}


</style>



<!-- Navbar -->

