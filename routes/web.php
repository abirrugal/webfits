<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\backend\admin\about\AboutController;
use App\Http\Controllers\backend\admin\area\AreaController;
use App\Http\Controllers\backend\admin\auth\BackendAuthController;
use App\Http\Controllers\backend\admin\blog\BlogController;
use App\Http\Controllers\backend\admin\brand\brandController;
use App\Http\Controllers\backend\admin\categories\CategoriesController;
use App\Http\Controllers\backend\admin\categories\ChildCategoriesController;
use App\Http\Controllers\backend\admin\categories\SubCategoriesController;
use App\Http\Controllers\backend\admin\color\ColorController;
use App\Http\Controllers\backend\admin\compare\CompareController;
use App\Http\Controllers\backend\admin\contact\ContactController;
use App\Http\Controllers\backend\admin\coupon\CouponController;
use App\Http\Controllers\backend\admin\customers\Customers_Controller;
use App\Http\Controllers\backend\admin\DashboardController;
use App\Http\Controllers\backend\admin\district\DistrictController;
use App\Http\Controllers\backend\admin\favicon\FaviconController;
use App\Http\Controllers\backend\admin\weight\WeightController;
use App\Http\Controllers\backend\admin\logo\LogoController;
use App\Http\Controllers\backend\admin\logo\SocialController;
use App\Http\Controllers\backend\admin\main_slider\MainSliderController;
use App\Http\Controllers\backend\admin\offers\OfferCategoryController;
use App\Http\Controllers\backend\admin\orders\OrdersController;
use App\Http\Controllers\backend\admin\page_content\PageContentController;
use App\Http\Controllers\backend\admin\page_title\PageTitleController;
use App\Http\Controllers\backend\admin\product_color\ProductColorController;
use App\Http\Controllers\backend\admin\products\ProductsController;
use App\Http\Controllers\backend\admin\size\SizeController;
use App\Http\Controllers\backend\admin\title_category\TitleCategoryController;
use App\Http\Controllers\backend\admin\wishlist\WishListController;
use App\Http\Controllers\backend\explore\ExploreController;
use App\Http\Controllers\FbController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\UserProfileController;
use App\Http\Controllers\frontend\OtherFrontendController;
use App\Http\Controllers\frontend\title_category\TitleCategoryController as FrontTitleCategoryController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::name('frontend.')->group(function(){

// });


//Products releted routes.
Route::get('/', [ProductController::class,'productsIndex'])->name('frontend.product.index');
Route::get('/allproducts', [ProductsController::class, 'allproducts'])->name('products.all');
Route::get('/home', [ProductController::class,'productsIndex'])->name('frontend.product.home');
Route::get('/product/featured', [ProductController::class, 'featuredProducts'])->name('frontend.product.featured');
Route::get('/product/best_seller', [ProductController::class, 'topProducts'])->name('frontend.product.best_seller');
Route::get('/product/recent', [ProductController::class, 'recentProducts'])->name('frontend.product.recent');

Route::get('/product/{id}/invoice', [ProductController::class, 'user_invoice'])->name('frontend.product.invoice');

//Main category
Route::get('/productsublist/{slug}', [ProductController::class,'productSub_list'])->name('frontend.product.sub_list');
Route::get('/product_list/{slug}', [ProductController::class, 'productList'])->name('frontend.product.products_list');
Route::get('/product_list_child/{slug}', [ProductController::class, 'productListChild'])->name('frontend.product.products_list_child');
Route::get('/product/{slug}', [ProductController::class, 'productShow'])->name('frontend.product.show');


//Cart releted routes.
Route::get('/cart/quantity', [CartController::class, 'cartCount'])->name('cart.quantity');
Route::get('/cart', [CartController::class, 'cartIndex'])->name('cart.index');
Route::post('/cart', [CartController::class, 'cartStore'])->name('cart.store');
Route::get('/cart/clear', [CartController::class, 'cartClear'])->name('cart.clear');
Route::get('/checkout', [CartController::class,'checkout'])->name('checkout');
Route::post('/change/qty', [CartController::class, 'changeQty'])->name('change.qty');
Route::get('/cart/destroy/{id}', [CartController::class, 'cartDestroy'])->name('cart.destroy');
Route::post('/buy_now/{id}', [CartController::class, 'buy_now'])->name('buy_now');
Route::get('/show/{id}', [CartController::class, 'show_items'])->name('cart.show');

//Auth releted routes.
Route::middleware('guest')->group(function () {
Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'registerLogic']);

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'loginLogic']);

});
Route::get('/activate/{token}', [AuthController::class, 'activate'])->name('activate');



Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/order', [CartController::class, 'orderProcess'])->name('order');

    Route::get('/order/{id}/details', [UserProfileController::class, 'orderDetails'])->name('order.details');

    Route::get('user/{user}/profile', [UserProfileController::class, 'userProfile'])->name('frontend.user.profile');
    Route::get('user/profile/{id}/edit', [UserProfileController::class, 'userProfileEdit'])->name('frontend.user.profile.edit');
    Route::get('user/{user}/orders', [UserProfileController::class, 'userOrders'])->name('frontend.user.orders');
    Route::put('user/{id}/update', [UserProfileController::class, 'updateUser'])->name('frontend.user.update');

    

    
});



    //Wishlist

    Route::prefix('wishlist')->middleware(['auth'])->group(function () {

        Route::get('/', [WishListController::class, 'wishlist'])->name('wishlist');
        // Route::get('/create', [WishListController::class, 'new_wishlist'])->name('wishlist.new');
       
        Route::get('/create/{id}', [WishListController::class, 'create_wishlist'])->name('wishlist.new');
        
        Route::delete('/delete/{id}', [WishListController::class, 'wishlist_delete'])->name('wishlist.delete');
     
    

    });

    //Compare

    Route::prefix('compare')->group(function () {

        Route::get('/', [CompareController::class, 'compare'])->name('compare');
        // Route::get('/create', [WishListController::class, 'new_wishlist'])->name('wishlist.new');
       
        Route::get('/create/{id}', [CompareController::class, 'compare_logic'])->name('compare.new');
        Route::get('/delete/{id}', [CompareController::class, 'compare_delete'])->name('compare.delete');
        Route::get('/clear', [CompareController::class, 'compare_clear'])->name('compare.clear');

     
    

    });

        //Coupon

        Route::prefix('coupon')->middleware(['auth'])->group(function () {

            Route::get('/', [CouponController::class, 'coupon'])->name('coupon');
            // Route::get('/create', [WishListController::class, 'new_wishlist'])->name('wishlist.new');
           
            Route::get('/create', [CouponController::class, 'create_coupon'])->name('coupon.create');
            Route::post('/create', [CouponController::class, 'store_coupon']);
            Route::get('/{id}/edit', [CouponController::class, 'edit_coupon'])->name('coupon.edit');
            Route::put('/{id}', [CouponController::class, 'update_coupon'])->name('coupon.update');
            Route::delete('/{id}', [CouponController::class, 'delete_coupon'])->name('coupon.delete')->middleware('isCreator');
        

            Route::post('/apply', [CouponController::class, 'apply_coupon'])->name('coupon.apply');
            Route::get('/remove', [CouponController::class, 'remove_coupon'])->name('coupon.remove');


    
        });


           //Title Category links


            Route::get('/gift_items', [FrontTitleCategoryController::class, 'premium_products'])->name('product.premium');
            Route::get('/comfort', [FrontTitleCategoryController::class, 'comfort_products'])->name('product.comfort');
            Route::get('/decor_dining', [FrontTitleCategoryController::class, 'decor_dining_products'])->name('product.decor_dining');
            Route::get('/bedroom', [FrontTitleCategoryController::class, 'bedroom_products'])->name('product.bedroom');
            Route::get('/comfy_bedding', [FrontTitleCategoryController::class, 'comfy_bedding_products'])->name('product.comfy_bedding');


// Password Reset 
      
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


//Confirm payment

// Route::get('/payment_confirm', [OrdersController::class, 'payment_confirm'])->name('payment.confirm');



// Other Routes 

Route::get('/about_us', [OtherFrontendController::class, 'about_us'])->name('frontend.about_us');
Route::post('/subs', [OtherFrontendController::class, 'subs_email'])->name('frontend.subs');
Route::get('/terms_and_conditions', [OtherFrontendController::class, 'terms_and_conditions'])->name('frontend.terms');
Route::get('/privacy', [OtherFrontendController::class, 'privacy'])->name('frontend.privacy');
Route::get('/contact_us', [OtherFrontendController::class, 'contact_us'])->name('frontend.contact_us');
Route::get('/blog/show/{id}', [BlogController::class, 'blog_show'])->name('blog.show');

Route::get('page/{id}/page_content/', [OtherFrontendController::class, 'page_content'])->name('frontend.page_content');


//Search Product

Route::get('/allproduct/search', [ProductController::class, 'filter_product'])->name('products.filter');



            //=======================================//
           //Backend Routes For Deshboard Operations//
// =================================================================
// =================================================================


    // Deshboard 
    Route::name('admin.')->prefix('admin')->middleware(['auth','Dashboard'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

   });


Route::name('admin.')->prefix('admin')->middleware(['auth','isNotCashier'])->group(function () {



    // Products 
    Route::get('/products', [ProductsController::class, 'products'])->name('products');
    Route::get('/product/stock_list', [ProductsController::class, 'products_stock'])->name('products.stlist');
    Route::get('/products/new', [ProductsController::class, 'productsNew'])->name('products.new');
    Route::post('/products', [ProductsController::class, 'productsStore']);
    Route::get('/products/{id}', [ProductsController::class, 'productsShow'])->name('products.show');
    Route::get('/products/{id}/edit', [ProductsController::class, 'productsEdit'])->name('products.edit');
    Route::put('/products/{id}', [ProductsController::class, 'productsUpdate'])->name('products.update');


    // Category 
    Route::get('/categories', [CategoriesController::class, 'categories'])->name('categories');
    Route::get('/categories/new', [CategoriesController::class, 'newCategory'])->name('category.new');
    Route::post('/categories', [CategoriesController::class, 'storeCategories']);
    Route::get('/categories/{id}', [CategoriesController::class, 'categoryShow'])->name('category.show');
    Route::get('/categories/{id}/edit', [CategoriesController::class, 'categoryEdit'])->name('category.edit');
    Route::put('/categories/{id}', [CategoriesController::class, 'categoryUpdate'])->name('category.update');

    //Sub Category
    Route::get('/subcategories', [SubCategoriesController::class, 'subCategories'])->name('subcategories');
    Route::get('/subcategories/new', [SubCategoriesController::class, 'newsubCategory'])->name('subcategory.new');
    Route::post('/subcategories', [SubCategoriesController::class, 'storeSubCategories']);
    Route::get('/subcategories/{id}', [SubCategoriesController::class, 'showSubCategory'])->name('subcategory.show');
    Route::get('/subcategories/{id}/edit', [SubCategoriesController::class, 'subCategoryEdit'])->name('subcategory.edit');
    Route::put('/subcategories/{id}', [SubCategoriesController::class, 'subCategoryUpdate'])->name('subcategory.update');


    //Child Category
    Route::get('/childcategories', [ChildCategoriesController::class, 'childCategories'])->name('childcategories');
    Route::get('/childcategories/new', [ChildCategoriesController::class, 'newChildCategory'])->name('childcategory.new');
    Route::post('/childcategories', [ChildCategoriesController::class, 'storeChildCategories']);
    Route::get('/childcategories/{id}', [ChildCategoriesController::class, 'showChildCategory'])->name('childcategory.show');
    Route::get('/childcategories/{id}/edit', [ChildCategoriesController::class, 'childCategoryEdit'])->name('childcategory.edit');
    Route::put('/childcategories/{id}', [ChildCategoriesController::class, 'childCategoryUpdate'])->name('childcategory.update');


    // Offers 
    Route::get('/offer', [OfferCategoryController::class, 'offer'])->name('offer');
    Route::get('/offer/new', [OfferCategoryController::class, 'newoffer'])->name('offer.new');
    Route::post('/offer/new', [OfferCategoryController::class, 'storeOffer']);
    Route::get('/offer/{id}', [OfferCategoryController::class, 'offerShow'])->name('offer.show');
    Route::get('/offer/{id}/edit', [OfferCategoryController::class, 'offerEdit'])->name('offer.edit');
    Route::put('/offer/{id}', [OfferCategoryController::class, 'offerUpdate'])->name('offer.update');




    //Customers
    Route::get('/customers', [Customers_Controller::class, 'customers'])->name('customers');
    Route::put('/customers/role/{id}', [Customers_Controller::class, 'changeRole'])->name('customers.role');





//Brand 
    Route::prefix('brand')->group(function () {

    
    Route::get('/', [brandController::class, 'brand'])->name('brand');
    Route::get('/create', [brandController::class, 'create_brand'])->name('brand.create');
    Route::post('/create', [brandController::class, 'store_brand']);
    Route::get('/{id}/edit', [brandController::class, 'edit_brand'])->name('brand.edit');
    Route::put('/{id}', [brandController::class, 'update_brand'])->name('brand.update');


   });

    Route::prefix('product_color')->group(function () {


    Route::get('/{id}', [ProductColorController::class, 'delete_product_color'])->name('product_color.delete');


   });


   Route::prefix('color')->group(function () {

    //Child Category
    Route::get('/', [ColorController::class, 'color'])->name('color');
    Route::get('/create', [ColorController::class, 'create_color'])->name('color.create');
    Route::post('/create', [ColorController::class, 'store_color']);
    Route::get('/{id}/edit', [ColorController::class, 'edit_color'])->name('color.edit');
    Route::put('/{id}', [ColorController::class, 'update_color'])->name('color.update');


   });


   Route::prefix('size')->group(function () {

   
    Route::get('/', [SizeController::class, 'size'])->name('size');
    Route::get('/create', [SizeController::class, 'create_size'])->name('size.create');
    Route::post('/create', [SizeController::class, 'store_size']);
    Route::get('/{id}/edit', [SizeController::class, 'edit_size'])->name('size.edit');
    Route::put('/{id}', [SizeController::class, 'update_size'])->name('size.update');


    Route::get('/product_size/{id}', [SizeController::class, 'delete_pro_size'])->name('pro_size.delete');



   });


 //Weight
   Route::prefix('weight')->group(function () {


    Route::get('/', [WeightController::class, 'weight'])->name('weight');
    Route::get('/create', [WeightController::class, 'create_weight'])->name('weight.create');
    Route::post('/create', [WeightController::class, 'store_weight']);
    Route::get('/{id}/edit', [WeightController::class, 'edit_weight'])->name('weight.edit');
    Route::put('/{id}', [WeightController::class, 'update_weight'])->name('weight.update');

    Route::get('/product_weight/{id}', [WeightController::class, 'delete_pro_weight'])->name('pro_weight.delete');

   });

   
//District 
Route::prefix('district')->group(function () {

    
    Route::get('/', [DistrictController::class, 'district'])->name('district');
    Route::get('/create', [DistrictController::class, 'create_district'])->name('district.create');
    Route::post('/create', [DistrictController::class, 'store_district']);
    Route::get('/{id}/edit', [DistrictController::class, 'edit_district'])->name('district.edit');
    Route::put('/{id}', [DistrictController::class, 'update_district'])->name('district.update');


   });


   //Area 
Route::prefix('area')->group(function () {

    
    Route::get('/', [AreaController::class, 'area'])->name('area');
    Route::get('/create', [AreaController::class, 'create_area'])->name('area.create');
    Route::post('/create', [AreaController::class, 'store_area']);
    Route::get('/{id}/edit', [AreaController::class, 'edit_area'])->name('area.edit');
    Route::put('/{id}', [AreaController::class, 'update_area'])->name('area.update');

    Route::get('/district/{id}', [AreaController::class, 'getArea'])->name('get.area');



   });


   //Blog 
   Route::prefix('blog')->group(function () {

    
    Route::get('/', [BlogController::class, 'blog'])->name('blog');
    Route::get('/create', [BlogController::class, 'create_blog'])->name('blog.create');
    Route::post('/create', [BlogController::class, 'store_blog']);
    Route::get('/{id}/edit', [BlogController::class, 'edit_blog'])->name('blog.edit');
    Route::put('/{id}', [BlogController::class, 'update_blog'])->name('blog.update');


   });

      //Logo 
      Route::prefix('logo')->group(function () {

    
        Route::get('/', [LogoController::class, 'logo'])->name('logo');
        Route::get('/create', [LogoController::class, 'create_logo'])->name('logo.create');
        Route::post('/create', [LogoController::class, 'store_logo']);
        Route::get('/{id}/edit', [LogoController::class, 'edit_logo'])->name('logo.edit');
        Route::put('/{id}', [LogoController::class, 'update_logo'])->name('logo.update');
    
    
       });
       
       

         //Favicon 
      Route::prefix('favicon')->group(function () {

    
        Route::get('/', [FaviconController::class, 'favicon'])->name('favicon');
        Route::get('/create', [FaviconController::class, 'create_favicon'])->name('favicon.create');
        Route::post('/create', [FaviconController::class, 'store_favicon']);
        Route::get('/{id}/edit', [FaviconController::class, 'edit_favicon'])->name('favicon.edit');
        Route::put('/{id}', [FaviconController::class, 'update_favicon'])->name('favicon.update');
    
    
       });


         //Social 
      Route::prefix('social')->group(function () {

    
        Route::get('/', [SocialController::class, 'social'])->name('social');
        Route::get('/create', [SocialController::class, 'create_social'])->name('social.create');
        Route::post('/create', [SocialController::class, 'store_social']);
        Route::get('/{id}/edit', [SocialController::class, 'edit_social'])->name('social.edit');
        Route::put('/{id}', [SocialController::class, 'update_social'])->name('social.update');
    
    
       });


      //Main Slider 
      Route::prefix('slider')->group(function () {

    
        Route::get('/', [MainSliderController::class, 'slider'])->name('slider');
        Route::get('/slider/status/{id}', [MainSliderController::class, 'slider_change_sts'])->name('slider.status');
        Route::get('/create', [MainSliderController::class, 'create_slider'])->name('slider.create');
        Route::post('/create', [MainSliderController::class, 'store_slider']);
        Route::get('/{id}/edit', [MainSliderController::class, 'edit_slider'])->name('slider.edit');
        Route::put('/{id}', [MainSliderController::class, 'update_slider'])->name('slider.update');
    
    
       });

            //About  
      Route::prefix('about')->group(function () {

    
        Route::get('/', [AboutController::class, 'about'])->name('about');
        // Route::get('/slider/status/{id}', [MainSliderController::class, 'slider_change_sts'])->name('slider.status');
        Route::get('/create', [AboutController::class, 'create_about'])->name('about.create');
        Route::post('/create', [AboutController::class, 'store_about']);
        Route::get('/{id}/edit', [AboutController::class, 'edit_about'])->name('about.edit');
        Route::put('/{id}', [AboutController::class, 'update_about'])->name('about.update');
    
    
       });


                  //Contact  
      Route::prefix('contact')->group(function () {

    
        Route::get('/', [ContactController::class, 'contact'])->name('contact');
        // Route::get('/slider/status/{id}', [MainSliderController::class, 'slider_change_sts'])->name('slider.status');
        Route::get('/create', [ContactController::class, 'create_contact'])->name('contact.create');
        Route::post('/create', [ContactController::class, 'store_contact']);
        Route::get('/{id}/edit', [ContactController::class, 'edit_contact'])->name('contact.edit');
        Route::put('/{id}', [ContactController::class, 'update_contact'])->name('contact.update');
    
    
       });

        //Explore  
         Route::prefix('explore')->group(function () {
        Route::get('/', [ExploreController::class, 'explore'])->name('explore');
        // Route::get('/slider/status/{id}', [MainSliderController::class, 'slider_change_sts'])->name('slider.status');
        Route::get('/create', [ExploreController::class, 'create_explore'])->name('explore.create');
        Route::post('/create', [ExploreController::class, 'store_explore']);
        Route::get('/{id}/edit', [ExploreController::class, 'edit_explore'])->name('explore.edit');
        Route::put('/{id}', [ExploreController::class, 'update_explore'])->name('explore.update');
    
    
       });


      //Page Title create  

      Route::prefix('page_title')->group(function () {

    
        Route::get('/', [PageTitleController::class, 'page_title'])->name('page_title');
        // Route::get('/slider/status/{id}', [MainSliderController::class, 'slider_change_sts'])->name('slider.status');
        Route::get('/create', [PageTitleController::class, 'create_page_title'])->name('page_title.create');
        Route::post('/create', [PageTitleController::class, 'store_page_title']);
        Route::get('/{id}/edit', [PageTitleController::class, 'edit_page_title'])->name('page_title.edit');
        Route::put('/{id}', [PageTitleController::class, 'update_page_title'])->name('page_title.update');
    
    
       });


             //Page Content create  

      Route::prefix('page_content')->group(function () {

    
        Route::get('/', [PageContentController::class, 'page_content'])->name('page_content');
        // Route::get('/slider/status/{id}', [MainSliderController::class, 'slider_change_sts'])->name('slider.status');
        Route::get('/create', [PageContentController::class, 'create_page_content'])->name('page_content.create');
        Route::post('/create', [PageContentController::class, 'store_page_content']);
        Route::get('/{id}/edit', [PageContentController::class, 'edit_page_content'])->name('page_content.edit');
        Route::put('/{id}', [PageContentController::class, 'update_page_content'])->name('page_content.update');
    
    
       });


   //Title Category 
Route::prefix('title_category')->group(function () {

    
    Route::get('/', [TitleCategoryController::class, 'title_category'])->name('title_category');
    Route::get('/create', [TitleCategoryController::class, 'create_title_category'])->name('title_category.create');
    Route::post('/create', [TitleCategoryController::class, 'store_title_category']);
    Route::get('/{id}/edit', [TitleCategoryController::class, 'edit_title_category'])->name('title_category.edit');
    Route::put('/{id}', [TitleCategoryController::class, 'update_title_category'])->name('title_category.update');


   });


});


Route::name('admin.')->prefix('admin')->middleware(['auth','isCreator'])->group(function () {

    Route::delete('/products/{id}', [ProductsController::class, 'productsDelete'])->name('products.delete');
    Route::delete('/categories/{id}', [CategoriesController::class, 'categoryDelete'])->name('category.delete');
    Route::delete('/subcategories/{id}', [SubCategoriesController::class, 'subCategoryDelete'])->name('subcategory.delete');
    Route::delete('/childcategories/{id}', [ChildCategoriesController::class, 'childCategoryDelete'])->name('childcategory.delete');
    Route::delete('/order/{id}', [OrdersController::class, 'orderDelete'])->name('order.delete');
    Route::delete('/brand/{id}', [brandController::class, 'delete_brand'])->name('brand.delete');
    Route::delete('/weight/{id}', [WeightController::class, 'delete_weight'])->name('weight.delete');
    Route::delete('/color/{id}', [ColorController::class, 'delete_color'])->name('color.delete');
    Route::delete('/size/{id}', [SizeController::class, 'delete_size'])->name('size.delete');
    Route::delete('/district/{id}', [DistrictController::class, 'delete_district'])->name('district.delete');
    Route::delete('/area/{id}', [AreaController::class, 'delete_area'])->name('area.delete');
    Route::delete('/social/{id}', [SocialController::class, 'delete_social'])->name('social.delete');
    Route::delete('/blog/{id}', [BlogController::class, 'delete_blog'])->name('blog.delete');
    Route::delete('/logo/{id}', [LogoController::class, 'delete_logo'])->name('logo.delete');
    Route::delete('/favicon/{id}', [FaviconController::class, 'delete_favicon'])->name('favicon.delete');
    Route::delete('/slider/{id}', [MainSliderController::class, 'delete_slider'])->name('slider.delete');
    Route::delete('/contact/{id}', [ContactController::class, 'delete_contact'])->name('contact.delete');
    Route::delete('/about/{id}', [AboutController::class, 'delete_about'])->name('about.delete');
    Route::delete('/explore/{id}', [ExploreController::class, 'delete_explore'])->name('explore.delete');
    Route::delete('/title_category/{id}', [TitleCategoryController::class, 'delete_title_category'])->name('title_category.delete');
    Route::delete('/page_title/{id}', [PageTitleController::class, 'delete_page_title'])->name('page_title.delete');
    Route::delete('/page_content/{id}', [PageContentController::class, 'delete_page_content'])->name('page_content.delete');

});




Route::name('admin.')->prefix('admin')->middleware(['auth','isCashier'])->group(function () {

    //Orders
    Route::get('/orders', [OrdersController::class, 'orders'])->name('orders');
    Route::get('/orders/{id}/invoice', [OrdersController::class, 'order_invoice'])->name('orders.invoice');
    Route::get('/order/new', [OrdersController::class, 'newOrder'])->name('order.new');
    Route::post('/orders', [OrdersController::class, 'orderStore']);
    Route::get('/order/{id}', [OrdersController::class, 'orderShow'])->name('order.show');
    Route::get('/order/{id}/edit', [OrdersController::class, 'orderEdit'])->name('order.edit');
    Route::put('/order/{id}', [OrdersController::class, 'orderUpdate'])->name('order.update');
    Route::put('/order/delivery/{id}', [OrdersController::class, 'DeleverOrderSts'])->name('order.delivery');
    Route::put('/order/payment/{id}', [OrdersController::class, 'PaymentOrderSts'])->name('order.payment');

    Route::get('/orders/completed', [OrdersController::class, 'completed_order'])->name('orders.completed');
    Route::get('/orders/processing', [OrdersController::class, 'processing_order'])->name('orders.processing');
    Route::get('/orders/cancel', [OrdersController::class, 'cancel_order'])->name('orders.cancel');


});





//User Account Create/Register 

Route::name('admin.')->prefix('admin/register')->middleware(['auth', 'isSuperAdmin'])->group(function () {

    Route::get('/', [BackendAuthController::class, 'create_account'])->name('account');
    Route::post('/', [BackendAuthController::class, 'store_account'])->name('account_store');

    Route::get('/user_list', [BackendAuthController::class, 'user_list'])->name('user_list');
    Route::delete('/{id}', [BackendAuthController::class,'delete_user'])->name('user.delete');
    Route::put('/role', [BackendAuthController::class, 'changeRole'])->name('user.role');

 
});


// Google URL
Route::prefix('google')->name('google.')->group( function(){
  Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
  Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});


Route::get('auth/facebook', [FbController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [FbController::class, 'facebookSignin']);


